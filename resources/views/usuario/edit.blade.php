@extends("layouts.admin")

@section("Descripcion")
	<h1 class="col-lg-12 text-center">
		<span class="fas fa-user-edit"></span> Actualizar Usuario: <b>"{{$usuario->name}}"</b>
	</h1>
@endsection

@section("content")
	{!! Form::model($usuario,['route' => ['usuario.update',$usuario->id],"method"=>"PUT" ]) !!}
	
		@include("usuario.forms.usuario")
		
	{!! Form::close() !!}
@endsection