@extends('layout.layout')

@section('content')
	<div class="container">
		<div class="ui secondary pointing menu">
			<a class="active item"> Libros </a>
			<div class="right menu">
				<a href="{{route('libros.crear')}}" class="ui item"> <i class="fa fa-plus"></i> </a>
				<a href="{{route('libros.crear_ajax')}}" class="ui item"> <i class="fa fa-plus"></i> </a>
			</div>
		</div>
		<div>
			<table class="ui single line table">
				<thead>
					<tr>
						<th>Libro</th>
						<th>Autor</th>
					</tr>
				</thead>
				<tbody>
					@foreach($libros as $libro)
					<tr>
						<td><a href="{{route('libros.ver_libro', ['id' => $libro->id])}}">{{$libro->nombre}}</a></td>
						<td class="icons">{{$libro->autor}} <a href="{{route('libros.borrar_libro', ['id_libro' => $libro->id])}}" class="remove"><i class="fa fa-remove"></i></a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$libros->render()}}
		</div>
	<!-- <article class="alertify-log alertify-log-success alertify-log-show">Libro guardado......</article> -->
	</div>
	@include('notificaciones.notificacion')
@stop