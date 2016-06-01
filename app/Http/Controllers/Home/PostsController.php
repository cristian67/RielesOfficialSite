<?php namespace Blog\Http\Controllers\Home;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Blog\Http\Requests\EditPostRequest;
use Blog\Post;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tag;



class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('id','desc')->paginate(10);

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

		$post = Post::create($data);

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
		$post = Post::findOrFail($id);
		return view('admin.posts.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditPostRequest $request, $id)
	{

		$tag = Post::findOrFail($id);

		//dd($post->tag);

		$post->fill(Request::all());

		$post->save();

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

		$post->delete();

		//Mensaje para eliminar
		Session::flash('message','La noticia:' . $post->title . ', fue eliminada');

		return Redirect::route('home.posts.index');
	}

}
