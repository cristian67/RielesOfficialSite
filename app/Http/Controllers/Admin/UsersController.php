<?php namespace Blog\Http\Controllers\Admin;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;
use Blog\Http\Requests\EditAdminRequest;

use Blog\User;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class UsersController extends Controller {

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
		
		$users = User::orderBy('id','desc')->paginate();
		return view('admin.user.desktop',compact('users'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.user.create');
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

			'name' 		 => 'required',
			'username'	 => 'required',
			'email'      => 'required|unique:users,email',
			'password'	 => 'required'

		);

		$v = Validator::make($data, $rules);

		if($v->fails())
		{
			return redirect()->back()
				->withErrors($v->errors())//errores q arroja
				->withInput(Request::all());
		}

		$user = User::create($data);

		//Mensaje para crear
		Session::flash('message','El usuario:' . $user->name . ', fue creado');

		return Redirect::route('admin.users.index');
	}
	/**
	 * Display the specified resource.
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
		$users = User::findOrFail($id);
		//dd($posts);
		return view('admin.user.edit')
				->with('users',$users);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditAdminRequest $request, $id)
	{
		
		$users = User::findOrFail($id);


		$users->fill(Request::all());

		$users->save();

		Session::flash('message','El usuario:' . $users->name . ', fue Actualizado');

		return Redirect::route('admin.users.index');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		

		$users = User::findOrFail($id);
		$users->delete();

		//Mensaje para eliminar
		Session::flash('message','El usuario:' . $users->name . ', fue eliminado');

		return Redirect::route('admin.users.index');
	}

}
