<html>
	@include('layout.header')
	<body>
		<div class="ui pointing menu">
		<!-- <div class="ui secondary pointing menu"> -->
			<a class="active item" href="{{route('home')}}"> <i class="fa fa-home"></i> Home</a>
			<a class="item" href="{{route('usuarios')}}"> <i class="fa fa-users"></i> Usuarios</a>
			<a class="item" href="{{route('libros.listado')}}"> <i class="fa fa-book"></i> Libros</a>
		</div>
		@yield('content')
	</body>
</html>