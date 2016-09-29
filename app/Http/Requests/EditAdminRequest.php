<?php namespace Blog\Http\Requests;

use Blog\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditAdminRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */

	public function __construct(Route $route)
	{
		$this->route = $route;
	}

	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{

		return [

				
			'name' 	 	=> 'required',
			'username'  => 'required',
			'email'     => 'required|unique:users,email,'. $this->route->getParameter('users'),
			'password'  => 'required'


		];
	}

}
