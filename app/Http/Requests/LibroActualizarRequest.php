<?php

namespace Pruebas\Http\Requests;

use Pruebas\Http\Requests\Request;

class LibroActualizarRequest extends Request{

	public function authorize(){
		return true;
	}

	public function rules(){
		return [
			'nombre' => 'required',
			'autor' => 'required',
			'descripcion' => 'required',
		];
	}
}