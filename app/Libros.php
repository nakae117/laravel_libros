<?php

namespace Pruebas;

use Illuminate\Database\Eloquent\Model;
use DB;

class Libros extends Model{

	protected $table = 'libros';
	public $timestamps = true;

	protected $fillable = [
		'nombre', 'autor', 'descripcion',
	];
}
