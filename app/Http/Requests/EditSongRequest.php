<?php namespace Blog\Http\Requests;

use Blog\Http\Requests\Request;

class EditSongRequest extends Request {

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

			'title' 	 => 'required',
			'lyrics'     => 'required',
			'cash'       => 'required',
			'ruta'		 => 'required',
			'albums_id'  => 'required'


		];
	}

}
