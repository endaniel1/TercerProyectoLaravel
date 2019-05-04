<table width="80%" border="0" align="left" cellpadding="5" cellspacing="5">
	<br /> 
	<tr>
		<td width="20%">
  			<div align="right">
  				<b>{!! Form::label("genre","Nombre:")!!}</b>
  			</div>
  		</td>
  		<td width="70%">
  			{!! Form::text('genre',null,["id"=>"genero","class"=>"form-control","placeholder"=>"Ingrese el Nombre","required"]); !!}
  		</td>
	</tr>
</table>