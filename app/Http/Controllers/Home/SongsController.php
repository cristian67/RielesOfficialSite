<?php namespace Blog\Http\Controllers\Home;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Blog\Http\Requests\EditSongRequest;
use Blog\Album;
use Blog\Song;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class SongsController extends Controller {

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
		$songs = Album::select('albums.*','songs.title as titulo','songs.lyrics as lyrics','songs.ruta as ruta','songs.cash as precio','songs.id as id_song')
			->join('songs', 'albums.id', '=', 'songs.albums_id')
			->paginate();

		return view('admin.music.desktop')
			->with('songs',$songs);

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Album::lists('title', 'id');
		return view('admin.music.create')->with('categories' , $categories);

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
			'lyrics'     => 'required',
			'cash'       => 'required',
			'ruta'		 => 'required',
			'albums_id'  => 'required'

		);

		$v = Validator::make($data, $rules);

		if($v->fails())
		{
			return redirect()->back()
				->withErrors($v->errors())//errores q arroja
				->withInput(Request::all());
		}

		$post = Song::create($data);

		//Mensaje para crear
		Session::flash('message','La cancion:' . $post->title . ', fue creada');

		return Redirect::route('home.songs.index');
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
		$song = Song::findOrFail($id);

		$categories = Album::lists('title', 'id');

		//return dd($song);
		return view('admin.music.edit', compact('song'))
			   ->with('categories' , $categories);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditSongRequest $request, $id)
	{

		$song = Song::findOrFail($id);

		//dd($post->tag);

		$song->fill(Request::all());

		$song->save();

		Session::flash('message','La noticia:' . $song->title . ', fue Actualizada');

		return Redirect::route('home.songs.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Song::findOrFail($id);

		$post->delete();

		//Mensaje para eliminar
		Session::flash('message','La cancion:' . $post->title . ', fue eliminada');

		return Redirect::route('home.songs.index');
	}

}
