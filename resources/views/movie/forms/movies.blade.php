<table width="80%" border="0" align="left" cellpadding="5" cellspacing="5">
	<br /> 
	<tr>
		<td width="20%">
  			<div align="right">
  				<b>{!! Form::label("nombre","Nombre:")!!}</b>
  			</div>
  		</td>
  		<td width="70%">
  			{!! Form::text('name',null,["class"=>"form-control","placeholder"=>"Ingrese el Nombre de la Pelicula","required"]); !!}
  		</td>
	</tr>
  <tr>
    <td width="20%">
        <div align="right">
          <b>{!! Form::label("Elenco","Elenco:")!!}</b>
        </div>
      </td>
      <td width="70%">
        {!! Form::text('cast',null,["class"=>"form-control","placeholder"=>"Ingrese el Elenco","required"]); !!}
      </td>
  </tr>
  <tr>
    <td width="20%">
        <div align="right">
          <b>{!! Form::label("Direccion","Dirección:")!!}</b>
        </div>
      </td>
      <td width="70%">
        {!! Form::text('direction',null,["class"=>"form-control","placeholder"=>"Ingresa al director","required"]); !!}
      </td>
  </tr>
   <tr>
    <td width="20%">
        <div align="right">
          <b>{!! Form::label("Duracion","Duración:")!!}</b>
        </div>
      </td>
      <td width="70%">
        {!! Form::text('duration',null,["class"=>"form-control","placeholder"=>"Ingresa la duración","required"]); !!}
      </td>
  </tr>
  <tr>
    <td width="20%">
        <div align="right">
          <b>{!! Form::label("Poster","Poster:")!!}</b>
        </div>
      </td>
      <td width="70%">
        {!! Form::file("path",["style"=>"width:100%"]) !!}
      </td>
  </tr>
  <tr>
    <td width="20%">
        <div align="right">
          <b>{!! Form::label("Genero","Genero:")!!}</b>
        </div>
      </td>
      <td width="70%">
        {!! Form::select("genre_id",$generos,null,["class"=>"form-control","required"]) !!}
      </td>
  </tr>
</table>