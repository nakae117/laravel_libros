<?php

namespace Pruebas\Http\Librerias;

use Illuminate\Database\Eloquent\Model;
use DB;

class Funciones extends Model{
	public function prueba(){
		echo "Hello World!! From Funciones";
	}
}