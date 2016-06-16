<?php namespace Blog\Http\Requests;

use Blog\Http\Requests\Request;

class EditMultimediaRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
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

			'description' 	 => 'required',
			'url'     		 => 'required',
			'type'       	 => 'required',
			'galerias_id'    => 'required'


		];
	}

}
