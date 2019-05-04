@extends("layouts.admin")

@section("Descripcion")
	<h1 class="">
		<span class="fas fa-gem"></span> Lista de Genero 
	</h1>
	<a class="d-sm-inline-block btn btn-sm btn-primary" href="{{ route('genero.create') }}"><span class="fas fa-plus"></span> Crear Nuevo Genero</a>
@endsection

@include("genero.modal")

@section("content")
	<table class="table table-hover table-striped table-bordered" >
		<thead>
			<tr>
				<td><b>Nombre</b></td>
				<td><b>Operaciones</b></td>	
			</tr><tr></tr>
		</thead> 
					
		<tbody id="datos">
			
		</tbody>
	</table>

@endsection
@section("scripts")
	<script type="text/javascript">
	//se va  aejucutar cuando carge el documento
		$(document).ready(function(e){
			Cargar();
		});
		//funcion de carga
		function Cargar(){
			//para leer y Mostrar Datos
			var tabladatos=$("#datos");
			var ruta="http://localhost/NuevoProyecto/public/generos";
			$("#datos").empty();
			//console.log();			

			$.get(ruta,function(res){
				//console.log(res);
				$(res).each(function(index,valor){
					//console.log(res[index]);
					tabladatos.append('<tr><td>'+res[index]['genre']+'</td><td><button type="button" value="'+res[index]['id']+'" class="btn btn-danger" onclick="Eliminar(this);" id="Eliminar"  ><span class="fas fa-trash"></span></button> <button type="button" value="'+res[index]['id']+'" class="btn btn-warning" data-toggle="modal" data-target="#Editar" onclick="Mostrar(this);"><span class="fas fa-fw fa-wrench"></span></button></td></tr>')
				});
			});			
		}
		//fin de leer y Mostrar Datos

		//para Eliminar Datos
		function Eliminar(btn){
			var route="http://localhost/NuevoProyecto/public/genero/"+btn.value;
			$("#form-delete").attr('action',route);
			$("#Eliminar").modal("show");
		}
		$("#Eliminar-genero").click(function(){

			$.ajax({
				url:$("#form-delete").attr('action'),				
				method: $("#form-delete").attr('method'),
				data: $("#form-delete").serialize(),
				dataType: "json",
				success:function(result){
                //console.log(result);
                		Cargar();                
                		$("#mensaje-eliminar").fadeIn();
                		$("#mensaje-actualizacion").fadeOut();
                		setTimeout(function(){
                			$("#mensaje-eliminar").fadeOut();
                		},3000);
                		$("#Eliminar").modal("hide");
            		},
           		error:function(){
              		console.log('error');// mensaje de erro si ocurrio algo
					}
			});
		});
		//Fin de Eliminar Datos

		//para mostrar los Datos a actualizar
		function Mostrar(btn){			

			var route="http://localhost/NuevoProyecto/public/genero/"+btn.value+"/edit";

			$.get(route,function(res){
				//console.log(res['genre']);
				$("#genero").val(res['genre']);
				$("#id").val(res['id']);
				
				//var actionform=$("#id").parents("form").attr("action");
				
				var nuevaaction=$("#id").parents("form").attr("action","http://localhost/NuevoProyecto/public/genero/"+$("#id").val() );
				//console.log(nuevaaction);
			});

		}
		//fin de mostrar los Datos a actualizar

		//para actualizar los Datos
		$("#Actualizar").click(function(){
			var form=$(this).parents("form");
			var dato=$("#genero").val();
			var value=$("#id").val();
			var route=$("#id").parents("form").attr("action")

			$.ajax({
				url:route,
				method: "PUT",		
				data:form.serialize(),
				dataType: "json",
				success:function(result){
                //console.log(result);
                		Cargar();                
                		$("#mensaje-actualizacion").fadeIn();
                		$("#mensaje-eliminar").fadeOut();
                		setTimeout(function(){
                			$("#mensaje-actualizacion").fadeOut();
                		},3000);
                		$("#Editar").modal("hide");
						//setTimeout('document.location.reload()',3000);
            		},
           		error:function(){
              		console.log('error');// mensaje de erro si ocurrio algo
					}
			});

		});
		//fin de Actualizar Datos

	</script>
@endsection
