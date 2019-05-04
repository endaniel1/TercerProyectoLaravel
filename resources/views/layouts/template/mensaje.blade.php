<?php $mensaje = Session::get("mensaje")?>
<?php $user    = Session::get("user")?>

<?php $movie    = Session::get("movie")?>
{{--Para la Creacion o Actualizacion de usuario--}}
@if(($mensaje == "Creado" || $mensaje == "Actualizado") && ($user))
	<div class="alert alert-success alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	Usuario "<strong>{{$user->name}}</strong>" Fue 
  	 {{$mensaje}} Exitosamente
	</div>
@endif
{{--Para Eliminacio de usuario--}}
@if($mensaje == "Eliminado"  && ($user))
	<div class="alert alert-warning alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	Usuario "<strong>{{$user->name}}</strong>" Fue 
  	 {{$mensaje}} Exitosamente
	</div>
@endif
{{--Para acceso no permitido--}}
@if($mensaje == "Accesso No Permitido")
  <div class="alert alert-info">
    {{$mensaje}}
  </div>
@endif  
{{--Para la Creacion o Actualizacion de Peliculas--}}
@if(($mensaje == "Creada" || $mensaje == "Actualizado") && ($movie))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Pelicula "<strong>{{$movie->name}}</strong>" Fue 
     {{$mensaje}} Exitosamente
  </div>
@endif
{{--alertas--}}
@if(count($errors)>0)
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
</div>
@endif
{{--Mensaje para cuando hago el registro de forma Ajax--}}
<div id="mensaje-registro" class="alert alert-success alert-dismissable" role="alert" style="display: none;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Genero Creado Correctamente</strong>
</div>
{{--Mensaje para cuando hago una Actualizacionde forma Ajax--}}
<div id="mensaje-actualizacion" class="alert alert-success alert-dismissable" role="alert" style="display: none;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Genero Actualizado Correctamente</strong>
</div>
{{--Mensaje para cuando hago una Actualizacionde forma Ajax--}}
<div id="mensaje-eliminar" class="alert alert-danger alert-dismissable" role="alert" style="display: none;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Genero Eliminado Correctamente</strong>
</div>
{{--Mensaje para cuando hago un error al registrar forma Ajax--}}
<div class="alert alert-danger alert-dismissible" role="alert" id="mensaje-registro-error" style="display: none;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong id="msj"></strong>
</div>