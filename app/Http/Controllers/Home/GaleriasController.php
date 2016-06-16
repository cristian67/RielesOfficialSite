<?php namespace Blog\Http\Controllers\Home;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Blog\Http\Requests\EditGaleriaRequest;
use Blog\Galeria;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class GaleriasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$galerias = Galeria::orderBy('id','desc')->paginate();
		return view('admin.galeria.desktop',compact('galerias'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('admin.galeria.create');

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
			'type'       => 'required',
			'photo'		 => 'required'

		);

		$v = Validator::make($data, $rules);

		if($v->fails())
		{
			return redirect()->back()
				->withErrors($v->errors())//errores q arroja
				->withInput(Request::all());
		}

		$galeria = Galeria::create($data);

		//Mensaje para crear
		Session::flash('message','La cancion:' . $galeria->title . ', fue creada');

		return Redirect::route('home.galerias.index');
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
		$galerias = Galeria::findOrFail($id);
		return view('admin.galeria.edit', compact('galerias'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditGaleriaRequest $request, $id)
	{

		$galerias = Galeria::findOrFail($id);

		//dd($post->tag);

		$galerias->fill(Request::all());

		$galerias->save();

		Session::flash('message','La galeria:' . $galerias->title . ', fue Actualizada');

		return Redirect::route('home.galerias.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$galerias = Galeria::findOrFail($id);

		$galerias->delete();

		//Mensaje para eliminar
		Session::flash('message','La galeria:' . $galerias->title . ', fue eliminada');

		return Redirect::route('home.galerias.index');
	}

}
