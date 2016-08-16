@extends('layout.layout')

@section('content')
	<div class="container">
		<div class="ui secondary pointing menu">
			<a class="active item"> Usuarios </a>
			<div class="right menu">
				<a href="{{route('libros.crear')}}" class="ui item"> <i class="fa fa-plus"></i> </a>
			</div>
		</div>
		<div>
			<table class="ui single line table">
				<thead>
					<tr>
						<th>#</th>
						<th>Usuario</th>
					</tr>
				</thead>
				<tbody>
					<!--  -->
				</tbody>
			</table>
		</div>
	</div>
	@include('notificaciones.notificacion')
@stop