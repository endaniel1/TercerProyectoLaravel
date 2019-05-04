@extends("layouts.admin")
@section("Descripcion")
	<h1 class="col-lg-12 text-center">
		<span class="fas fa-gem"></span> Crear Nuevo Genero 
	</h1>
@endsection
@section("content")
	{!! Form::open(['route' => 'genero.store',"method"=>"POST","class"=>"form-horizontal"]) !!}
		
		@include("genero.forms.genero")
		{{-- para los botones--}}
		<br> <br>
		<div class="row">
			<div class="col-lg-4 text-center">
				<div class="form-group">
					{!! Form::button("<span class='fas fa-share-square '></span> Registrar",["type"=>"button","class"=>"btn btn-success btn-sm","id"=>"registro"])!!}
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
	<script>
		$("#registro").click(function(e){

			e.preventDefault();

			if (!confirm("¿Está Seguro que Desea Crear?")) {
				return false;
			}
			var dato=$("#genero").val();
			var form=$(this).parents("form");
	
			var route=form.attr("action");
				
			$.ajax({
				url:route,
				method: "POST",		
				data:form.serialize(),
				dataType: "json",
				success:function(result){
                		//console.log(result);     
                		form.trigger('reset'); 
                		$("#mensaje-registro").fadeIn();
                		setTimeout(function(){
                			$("#mensaje-registro").fadeOut();
                		},3000);
                		
                		$("#mensaje-registro-error").fadeOut();
            		},
           		error:function(msj){//mensaje de error para las validaciones o ocurre algun errors
           			$("#msj").html("");
           			//console.log(msj.responseJSON.errors.genre);
              			for (var i =0; i < msj.responseJSON.errors.genre.length; i++) {
              				//console.log(msj.responseJSON.errors.genre[i]);
              				
              				$("#msj").append(msj.responseJSON.errors.genre[i]+"<br>");
              			}
              			$("#mensaje-registro-error").fadeIn();
					}
			});
		});
	</script>
@endsection