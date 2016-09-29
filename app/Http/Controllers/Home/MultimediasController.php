<?php namespace Blog\Http\Controllers\Home;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Blog\Http\Requests\EditMultimediaRequest;
use Blog\Galeria;
use Blog\Multimedia;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class MultimediasController extends Controller {

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

		$multi = Galeria::orderBy('id','desc')
			->select('Multimedias.*','galerias.type as tipo','galerias.title as titulo')
			->join('Multimedias', 'galerias.id', '=', 'Multimedias.galerias_id')
			->paginate();

		return view('admin.galeria.multimedia.desktop')
			->with('multi',$multi);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Galeria::lists('title', 'id');
		return view('admin.galeria.multimedia.create')
			->with('categories' , $categories);

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

			'description' 	 => 'required',
			'url'     		 => 'required',
			'type'           => 'required',
			'galerias_id'    => 'required'

		);

		$v = Validator::make($data, $rules);

		if($v->fails())
		{
			return redirect()->back()
				->withErrors($v->errors())//errores q arroja
				->withInput(Request::all());
		}

		$post = Multimedia::create($data);

		//Mensaje para crear
		Session::flash('message','La cancion:' . $post->description. ', fue creada');
		return Redirect::route('home.multimedias.index');
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
		$multi = Multimedia::findOrFail($id);

		$categories = Galeria::lists('title', 'id');

		//return dd($song);
		return view('admin.galeria.multimedia.edit', compact('song'))
			   ->with('categories' , $categories)
		       ->with('multi' , $multi);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditMultimediaRequest $request, $id)
	{

		$multi = Multimedia::findOrFail($id);

		//dd($post->tag);

		$multi->fill(Request::all());

		$multi->save();

		Session::flash('message','La multimedia:' . $multi->description . ', fue Actualizada');

		return Redirect::route('home.multimedias.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$multi = Multimedia::findOrFail($id);

		$multi->delete();

		//Mensaje para eliminar
		Session::flash('message','La :' . $multi->description . ', fue eliminada');

		return Redirect::route('home.multimedias.index');
	}

}
