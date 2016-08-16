<?php
Route::get('/', function(){ return view('welcome');});

Route::get('prueba',['as' => 'welcome.xampp', 'uses' => 'PruebasIndex@index']);
Route::get('/home',['as' => 'home', 'uses' => 'PruebasIndex@home']);

Route::group(['prefix' => 'libros'], function(){
	Route::get('/', ['as' => 'libros.listado', 'uses' => 'LibrosController@listado']);
	Route::get('/crear', ['as' => 'libros.crear', 'uses' => 'LibrosController@crear']);
	Route::get('/crear_ajax', ['as' => 'libros.crear_ajax', 'uses' => 'LibrosController@crear_ajax']);
	Route::post('/registrar_libro', ['as' => 'libros.registrar_libro', 'uses' => 'LibrosController@registrar']);
	Route::get('/actualizar/{id_libro}', ['as' => 'libros.actualizar', 'uses' => 'LibrosController@update']);
	Route::post('/actualizar', ['as' => 'libros.save', 'uses' => 'LibrosController@saveLibro']);
	Route::get('/ver_libro/{id_libro}', ['as' => 'libros.ver_libro', 'uses' => 'LibrosController@verLibro']);
	Route::get('/borrar_libro/{id_libro}', ['as' => 'libros.borrar_libro', 'uses' => 'LibrosController@deleteLibro']);
});

Route::group(['prefix' => 'usuarios'], function(){
	Route::get('/', ['as' => 'usuarios', 'uses' => 'UsuariosController@index']);
});