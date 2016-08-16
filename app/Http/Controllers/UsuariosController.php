<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;

use Pruebas\Http\Requests;

class UsuariosController extends Controller{

	public function index(){
		echo view('usuarios.index');
	}
	
}