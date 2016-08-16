<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Pruebas\Http\Requests;
use Pruebas\Http\Requests\LibroCrearRequest;
use Pruebas\Http\Requests\LibroActualizarRequest;
use Pruebas\Libros;
use Pruebas\Http\Librerias\Funciones;
use DB;

class LibrosController extends Controller{

	public function crear(){
		echo view('libros.crear');
	}

	public function crear_ajax(){
		echo view('libros.crear_ajax');
	}

	public function registrar(LibroCrearRequest $request, Libros $libros){
		$libros->fill($request->all());
		$libros->save();

		return redirect(route('libros.listado'))->with("mensaje", "Libro guardado...");
	}

	public function listado(Libros $libros){
		$data['libros'] = $libros->paginate(3);
		echo view('libros.listado',$data);
	}

	public function verLibro($id_libro, Libros $libros){
		$data['libro'] = $libros->find($id_libro);
		echo view('libros.ver_libro', $data);
	}

	public function update($id_libro, Libros $libros){
		$data['libro'] = $libros->find($id_libro);
		echo view('libros.actualizar', $data);
	}

	public function saveLibro(LibroActualizarRequest $request){
		$libros = Libros::find($request->id_libro);
		$libros->fill($request->all());
		$libros->save();

		return redirect(route('libros.ver_libro', ['id_libro' => $request->id_libro]))->with("mensaje", "Cambios guardados...");
	}
	public function deleteLibro($id_libro){
		Libros::destroy($id_libro);

		return redirect(route('libros.listado'))->with("mensaje", "Libro borrado...");
	}
}