<?php namespace Blog\Http\Controllers;


use Blog\Galeria;
use Blog\Multimedia;



class GalleriaController extends Controller {

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
	public function galerias()
	{
		$galeria = Galeria::orderBy('id','desc')->paginate(6);

		//return	dd($galerias);
		return view('galleria',compact('galeria'));

	}

	public function ver($id)
	{
        $foto = Galeria::findOrFail($id)
						->select('Multimedias.*','galerias.type as tipo','galerias.title as titulo')
						->where('galerias.id', '=', $id)
						->join('Multimedias', 'galerias.id', '=', 'Multimedias.galerias_id')
						->get();

        //return dd($foto);

        return view('ver_galeria')
			->with('galeria',$foto);

    }


	public function video($id)
	{
        $video = Galeria::findOrFail($id)
								->select('Multimedias.*','galerias.type as tipo','galerias.title as titulo')
								->where('galerias.id', '=', $id)
								->join('Multimedias', 'galerias.id', '=', 'Multimedias.galerias_id')
								->get();


       //return dd($video);

        return view('ver_videos')
            ->with('galeria',$video);


	}

}
