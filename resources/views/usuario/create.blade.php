@extends("layouts.admin")

@section("Descripcion")
	<h1 class="col-lg-12 text-center">
		<span class="fas fa-user"></span> Crear Nuevo Usuario 
	</h1>
@endsection


@section("content")
	{!! Form::open(['route' => 'usuario.store',"method"=>"POST","class"=>"form-horizontal"]) !!}
	
		@include("usuario.forms.usuario")

	{!! Form::close() !!}
@endsection