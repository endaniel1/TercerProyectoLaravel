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