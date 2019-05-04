@extends("layouts.admin")


@section("Descripcion")
	<h1 class="">
		<span class="fas fa-clipboard-list"></span> Lista de Usuarios
	</h1>
	
	<a class="d-sm-inline-block btn btn-sm btn-primary" href="{{ route('usuario.create') }}"><span class="fas fa-plus"></span> Crear Nuevo Usuario</a>
@endsection

@section("content")
	<div class="users">
		<table class="table table-hover table-striped table-bordered">
			<tr>
				<td><b>ID</b></td>
				<td><b>Nombre</b></td>
				<td><b>Correo</b></td>	
				<td><b>Operaciones</b></td>	
			</tr>
			@foreach($usuarios as $usuario)
				<tr>
					<td> {{$usuario->id}}</td>
					<td> {{$usuario->name}}</td>
					<td> {{$usuario->email}}</td>
					<td> 
						<a href="{{route('usuario.destroy', $usuario->id."/destroy" ) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que Desea Eliminarlo?') "> <span class="fas fa-trash"></span></a>
						<a href="{{route('usuario.edit',$usuario->id) }}" class="btn btn-warning"><span class="fas fa-fw fa-wrench"></span></a>
					</td>
				</tr>
			@endforeach
		</table>
	
	
		<div class="text-center">	
			{!! $usuarios->render()!!}
			{{-- Y haci es para mostar de una vez una paginacion sencilla --}}
		</div>
	</div>
@endsection

@section("scripts")
	<script type="text/javascript">
		//paginacion con ajax sin q recarge la pagina osea
		$(document).on('click', '.pagination a', function(e) {
			event.preventDefault();
			var page=$(this).attr("href").split("page=")[1];
			var route="http://localhost/NuevoProyecto/public/usuario";
			//console.log(page);
			$.ajax({
				url:route,
				data:{ page: page},
				type:"GET",
				dataType:"json",
				success:function(data){
					//console.log(data);
					$(".users").html(data);
				}
			});
		});
	
	</script>
@endsection