<?php namespace Blog\Http\Controllers\Home;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Blog\Http\Requests\EditPostRequest;
use Blog\Post;
use Blog\Tag;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class PostsController extends Controller {

		//constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$request = Request::get('name');

		$posts = Post::name($request)->orderBy('id','desc')->paginate(10);

		return view('admin.posts.desktop',compact('posts'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		//$data y $rules es para validar datos
		$data = Request::all();

		$rules = array(

			'title' 	 => 'required',
			'content'    => 'required',
			'description'=> 'required',
			'tags'		 => 'required',
			'photo'		 => 'required'
		);
		/* en actualizar es el nuevo validar*/
		// Metodo antiguo validar
		$v = Validator::make($data, $rules);

		if($v->fails())
		{
			return redirect()->back()
				   ->withErrors($v->errors())//errores q arroja
				   ->withInput(Request::all());
		}

		//Creando datos tablas separadas
		$tag = Tag::create($data);
		$post = Post::create($data);

		//buscando id por tabla el q se creo
		$e_tag= Tag::orderby('id','DESC')->select('id')->first();
		$tag_id = $e_tag->id;

		$e_post = Post::orderby('id','DESC')->select('id')->first();
		$post_id = $e_post->id;

		$posts = Post::find($post_id);
		$posts->tags()->attach($tag_id);
		
		//Mensaje para crear
		Session::flash('message','La noticia:' . $post->title . ', fue creada');

		return Redirect::route('home.posts.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$posts = Post::select('posts.*','tags.tags as tags')
			->where('posts.id','=',$id)
			->leftJoin('post_tag', 'posts.id', '=', 'post_tag.posts_2_id')
			->leftJoin('tags', 'post_tag.tags_2_id', '=', 'tags.id')
			->get();
		//dd($posts);
		return view('admin.posts.edit')
				->with('posts',$posts);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditPostRequest $request, $id)
	{

		$post = Post::findOrFail($id);
		$post->fill(Request::all());
		$post->save();
		$posts = Post::select('posts.*','tags.tags as tags','tags.id as tag_id')
			->where('posts.id','=',$id)
			->leftJoin('post_tag', 'posts.id', '=', 'post_tag.posts_2_id')
			->leftJoin('tags', 'post_tag.tags_2_id', '=', 'tags.id')
			->first();
		$tags = $posts->tag_id;

		
		if($tags == '') 
		{	
			$data = Request::all();
			$rules = array(

			'title' 	 => 'required',
			'content'    => 'required',
			'description'=> 'required',
			'tags'		 => 'required',
			'photo'		 => 'required'
			);
		/* en actualizar es el nuevo validar*/
		// Metodo antiguo validar
		$v = Validator::make($data, $rules);
		if($v->fails())
			{
			return redirect()->back()
				   ->withErrors($v->errors())//errores q arroja
				   ->withInput(Request::all());
			}

			$tag = Tag::create($data);
			
			$e_tag= Tag::orderby('id','DESC')->select('id')->first();
			$tag_id = $e_tag->id;
			
			$posts = Post::find($id);
			$posts->tags()->attach($tag_id);
		}else 
		{
			$tag = Tag::findOrFail($tags);
			$tag->fill(Request::all());
			$tag->save();
		}

		Session::flash('message','La noticia:' . $post->title . ', fue Actualizada');
		return Redirect::route('home.posts.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$posts = Post::select('posts.*','tags.tags as tags','tags.id as tag_id')
							->where('posts.id','=',$id)
							->leftJoin('post_tag', 'posts.id', '=', 'post_tag.posts_2_id')
							->leftJoin('tags', 'post_tag.tags_2_id', '=', 'tags.id')
							->first();
		$tags = $posts->tag_id;
		
		if($tags != '') {
			$tag = Tag::findOrFail($tags);
			//eliminar pivot
			$posts = Post::find($id);
			$posts->tags()->detach($tags);
			//eliminar tag
			$tag->delete();
		}
		$post->delete();
		//Mensaje para eliminar
		Session::flash('message','La noticia:' . $post->title . ', fue eliminada');

		return Redirect::route('home.posts.index');
	}

}
