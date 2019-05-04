@extends("layouts.admin")

@section("Descripcion")
	<h1 class="col-lg-12 text-center">
		<span class="fas fa-film"></span> Crear Nueva Pelicula 
	</h1>
@endsection

@section("content")
	{!! Form::open(['route' => 'movie.store',"method"=>"POST","files"=>true,"class"=>"form-horizontal"]) !!}
		@include("movie.forms.movies")
		{{-- para los botones--}}
		<br> <br><br> <br><br> <br><br> <br><br> <br><br> <br>
		<div class="row">
			<div class="col-lg-4 text-center">
				<div class="form-group">
					{!! Form::button("<span class='fas fa-share-square '></span> Registrar",["type"=>"submit","class"=>"btn btn-success btn-sm","id"=>"registro"])!!}
				</div>
			</div>
			<div class="col-lg-8 text-left">
				<div class="form-group">
					{!! Form::button(" <span class='fas fa-redo-alt'></span> Reset",["type"=>"reset","class"=>"btn btn-danger btn-sm"]) !!}

				</div>
			</div>
		</div>
	{!! Form::close() !!}
@endsection

@section("scripts")

@endsection
