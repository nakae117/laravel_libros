@extends('layout.layout')

@section('content')
<form action='{{route("libros.registrar_libro")}}' method='post'>
	@include('errors.errores')
	<div class="ui secondary pointing menu">
		<a class="active item"> Registrar libro </a>
	</div>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<p class="control has-icon">
		<input class="input" type="text" id="nombre" name="nombre" placeholder="Nombre" autocomplete='off'>
		<i class="fa fa-book"></i>
	</p>
	<p class="control has-icon">
		<input class="input" type="text" id="autor" name="autor" placeholder="Autor" autocomplete='off'>
		<i class="fa fa-user"></i>
	</p>
	<p class="control has-icon">
		<textarea class="textarea" id="descripcion" name="descripcion" placeholder="Descripción"></textarea>
		<i class="fa fa-pencil"></i>
	</p>
	<p class="control">
		<button class="button is-success">Guardar</button>
	</p>
</form>
@stop