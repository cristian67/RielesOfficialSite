<?php namespace Blog\Http\Controllers;


use Blog\Galeria;



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
                            ->select('multimedias.*','galerias.type as type')
                            ->where('galerias.id', '=', $id)
                            ->join('galeria_multimedia', 'galerias.id', '=', 'galeria_multimedia.galerias_2_id')
                            ->join('multimedias', 'galeria_multimedia.multimedias_2_id', '=', 'multimedias.id')
                            ->get();


        //return dd($foto);

        return view('ver_galeria')
			->with('galeria',$foto);

    }


	public function video($id)
	{
        $video = Galeria::findOrFail($id)
                            ->select('multimedias.*','galerias.type as type')
                            ->where('galerias.id', '=', $id)
                            ->join('galeria_multimedia', 'galerias.id', '=', 'galeria_multimedia.galerias_2_id')
                            ->join('multimedias', 'galeria_multimedia.multimedias_2_id', '=', 'multimedias.id')
                            ->get();


       //return dd($video);

        return view('ver_videos')
            ->with('galeria',$video);


	}

}
