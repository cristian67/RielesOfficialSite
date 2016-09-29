<?php namespace Blog\Http\Controllers\Home;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Blog\Http\Requests\EditAlbumRequest;
use Blog\Album;
use Blog\Song;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class AlbumsController extends Controller {

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
		$albums = Album::orderBy('id','desc')->paginate();
		return view('admin.music.album.desktop',compact('albums'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Album::lists('title', 'id');
		return view('admin.music.album.create')->with('categories' , $categories);

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
			'description'=> 'required',
			'cash'       => 'required',
			'photo'		 => 'required'

		);

		$v = Validator::make($data, $rules);

		if($v->fails())
		{
			return redirect()->back()
				->withErrors($v->errors())//errores q arroja
				->withInput(Request::all());
		}

		$post = Album::create($data);

		//Mensaje para crear
		Session::flash('message','El album:' . $post->title . ', fue creada');

		return Redirect::route('home.albums.index');
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
		$album = Album::findOrFail($id);
		return view('admin.music.album.edit', compact('album'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditAlbumRequest $request, $id)
	{

		$album = Album::findOrFail($id);

		//dd($post->tag);

		$album->fill(Request::all());

		$album->save();

		Session::flash('message','El album:' . $album->title . ', fue Actualizada');

		return Redirect::route('home.albums.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$songs = Song::where('albums_id','=',$id)->delete();

		//dd($multi);

		

		$album = Album::findOrFail($id);
		$album->delete();
		//Mensaje para eliminar
		Session::flash('message','El album:' . $album->title . ', fue eliminada');

		return Redirect::route('home.songs.index');
	}

}
