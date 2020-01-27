<div class="modal fade left" id="level-add-modal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-sm modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true"> Nuevo</i></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-group">
                    <label for="lev_name">Grado:</label>
                    <input type="text" name="lev_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="lev_parallel">Paralelo:</label>
                    <input type="text" name="lev_parallel" class="form-control" maxlength="1">
                </div>

                <div class="form-group">
                    {!! Form::label('lev_status', 'Activar:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('lev_status', 0) !!} {!! Form::checkbox('lev_status', '1', null) !!}
                    </label>
                </div>

            </div>

            <div class="modal-footer">
                {!! Form::submit('Crear',['class' => 'btn btn-warning']) !!}
                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>