@extends('layout.layout')

@section('content')
<form action='{{route("libros.save")}}' method='post'>
	@include('errors.errores')
	<div class="ui secondary pointing menu">
		<a class="active item"> Editar </a>
	</div>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="id_libro" value="{{$libro->id}}">
	<p class="control has-icon">
		<input class="input" type="text" id="nombre" name="nombre" placeholder="Nombre" autocomplete='off' value="{{$libro->nombre}}">
		<i class="fa fa-book"></i>
	</p>
	<p class="control has-icon">
		<input class="input" type="text" id="autor" name="autor" placeholder="Autor" autocomplete='off' value="{{$libro->autor}}">
		<i class="fa fa-user"></i>
	</p>
	<p class="control has-icon">
		<textarea class="textarea" id="descripcion" name="descripcion" placeholder="Descripción">{{$libro->descripcion}}</textarea>
		<i class="fa fa-pencil"></i>
	</p>
	<p class="control">
		<button class="button is-success"> Guardar </button>
	</p>
</form>
@stop