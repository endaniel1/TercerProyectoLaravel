@extends("layouts.admin")

@section("Descripcion")
	<h1 class="col-lg-12 text-center">
		<span class="fas fa-film"></span> Lista De Peliculas 
	</h1>
@endsection

@section("content")
	<table class="table table-hover table-responsive" >
		<thead>
			<tr>
				<td width="15%"><b>Nombre</b></td>
				<td width="25%"><b>Genero</b></td>
				<td width="30%"><b>Dirección</b></td>	
				<td width="30%"><b>Caratula</b></td>	
				<td ><b>Operaciones</b></td>	
			</tr>
		</thead> 
		@foreach($movies as $movie)			
			<tbody>
				<td width="10%">{{$movie->name}}</td>
				<td width="30%">{{$movie->genre}}</td>
				<td width="30%">{{$movie->direction}}</td>
				<td width="30%">
					<img src="{{asset('movies/'.$movie->path)}}" alt="" style="width: 100%;height: 100%;position: relative;">
				</td>
				<td>Editar</td>
			</tbody>
		@endforeach
	</table>
@endsection

@section("scripts")
	
@endsection