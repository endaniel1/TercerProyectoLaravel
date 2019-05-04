{{--MODAL DE EDITAR--}}
<div class="modal fade" tabindex="-1" role="dialog" id="Editar">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">        

        <h3 class="modal-title" align="center">Actualizar Genero</h3>
        <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button> 

      </div>    

      <div class="modal-body">
          {!! Form::open(["route"=>['genero.update', ''],"method"=>"PUT","class"=>"form-horizontal"])!!}
            <input type="hidden" name="id" id="id" value="">
            @include("genero.forms.genero")
            {{-- para los botones--}}
            <br> <br>
            <div class="row">
              <div class="col-lg-4 text-center">
                <div class="form-group">
                  {!! Form::button("<span class='fas fa-share-square '></span> Actualizar",["type"=>"button","class"=>"btn btn-success btn-sm","id"=>"Actualizar"])!!}
                </div>
              </div>
              <div class="col-lg-8 text-left">
                <div class="form-group">
                {!! Form::button(" <span class='fas fa-redo-alt'></span> Reset",["type"=>"reset","class"=>"btn btn-danger btn-sm"]) !!}

                </div>
              </div>
            </div>
          {!! Form::close() !!}
      </div>
      
    </div>
  </div>
</div>
{{--FIN MODAL DE EDITAR--}}
{{---MODAL DE ELIMINAR--}}
<div class="modal fade" tabindex="-1" role="dialog" id="Eliminar">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">        

        <h3 class="modal-title" align="center">Elimando Genero</h3>
        <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button> 

      </div>    

      <div class="modal-body">
           <div class="modal-body">
              <p>¿Esta Seguro de Eliminar el Genero?</p>
            </div>
            {!! Form::open(["id"=>"form-delete","method"=>"DELETE"])!!}
            {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger" id="Eliminar-genero">Eliminar Genero</button>
      </div>
      
    </div>
  </div>
</div>
{{---FIN MODAL DE ELIMINAR--}}