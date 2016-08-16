@extends('layout.layout')

@section('content')
	<div class="container_books">
		<div class="ui secondary pointing menu">
			<a class="active item"> Libro </a>
			<div class="right menu">
				<a href="{{route('libros.actualizar', ['id_editar' => $libro->id])}}" class="ui item"> <i class="fa fa-pencil"></i> </a>
			</div>
		</div>
		<div>
			<table class="ui single line table">
				<tbody>
					<tr>
						<td><strong><i class="fa fa-book"></i> Nombre:</strong></td>
						<td>{{$libro->nombre}}</td>
					</tr>
					<tr>
						<td><strong><i class="fa fa-user"></i> Autor:</strong></td>
						<td>{{$libro->autor}}</td>
					</tr>
					<tr>
						<td><strong><i class="fa fa-pencil"></i> Descripción:</strong></td>
						<td>{{$libro->descripcion}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	@include('notificaciones.notificacion')
@stop