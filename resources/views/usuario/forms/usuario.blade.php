<table width="80%" border="0" align="left" cellpadding="5" cellspacing="5">
			<br /> 
			<tr>
				<td width="20%">
  					<div align="right">
  						<b>{!! Form::label("name","Nombre:")!!}</b>
  					</div>
  				</td>
  				<td width="70%">
  					{!! Form::text('name',null,["class"=>"form-control","placeholder"=>"Ingrese el Nombre de Usuario","required"]); !!}
  				</td>
			</tr>
			<tr>
				<td width="20%">
  					<div align="right">
  						<b>{!! Form::label("email","Correo:")!!}</b>
  					</div>
  				</td>
  				<td width="70%">
  					{!! Form::email('email',null,["class"=>"form-control","placeholder"=>"Ingrese el Correo de Usuario","required"]); !!}
  				</td>
			</tr>
			<tr>
				<td width="20%">
  					<div align="right">
  						<b>{!! Form::label("password","Password:")!!}</b>
  					</div>
  				</td>
  				<td width="70%">
  					{!! Form::password("password",["class"=>"form-control","placeholder"=>"********","required"])  !!}
  				</td>
			</tr>
			<tr>
				<td align="right">
					<div class="form-group">
						{!! Form::button("<span class='fas fa-share-square '></span> Registrar",["type"=>"submit","class"=>"btn btn-success btn-sm"])!!}
					</div>
				</td>
				<td align="left">
					<div class="form-group">
						{!! Form::button(" <span class='fas fa-redo-alt'></span> Reset",["type"=>"reset","class"=>"btn btn-danger btn-sm"]) !!}

					</div>
				</td>
			</tr>
		</table>