<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;

use Pruebas\Http\Requests;
use Pruebas\Http\Librerias\Funciones;
use DB;

class PruebasIndex extends Controller{
    public function index(){
		echo "Hello World!!!";
	}

	public function home(Funciones $funcion){
		$data['funcion'] = $funcion;
		echo view('layout.home', $data);
	}
}
