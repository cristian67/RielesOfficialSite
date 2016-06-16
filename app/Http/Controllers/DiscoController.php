<?php namespace Blog\Http\Controllers;


use Blog\Album;
use Blog\Song;



class DiscoController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

		/* Funcionando */
	public function disco()
	{
		$disco = Album::orderBy('id','desc')->paginate(6);

		//return	dd($disco);
		return view('music.galleria',compact('disco'));

	}

	public function ver($id)
	{
        $songs = Album::findOrFail($id)
							->select('albums.*','songs.lyrics as lyrics','songs.ruta as ruta','songs.cash as cash')
                            ->where('albums.id', '=', $id)
							->join('songs', 'albums.id', '=', 'songs.albums_id')
                            ->get();


        //return dd($music);

        return view('music.audio')
			->with('songs',$songs);

    }
}
