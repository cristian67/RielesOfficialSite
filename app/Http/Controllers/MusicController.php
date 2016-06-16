<?php namespace Blog\Http\Controllers;


use Blog\Album;




class MusicController extends Controller {

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

	public function getFilesdb()
	{
		return view('music.filesdb');
	}

	public function postFilesdb()
	{
		$fileInput = Input::file('file');

		if(Input::hasFile('file'))
		{
			$fileName    = Hash::make($fileInput->getClientOriginalName());
			$path		 = public_path() . '/uploads/';
			$fileSize    = $fileInput->getClientSize()/1024;


			$albumes     = Album::find(1);

			$song 		 = new Archivo;
			$song->title = $fileName;
			$song->ruta  = $path;
			$song->size  = $fileSize;

			$song->album()->associate($albumes);

			if($fileInput->move($path,$fileName))
			{
				$song->save();
			}
		}

	}

}
