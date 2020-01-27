<div class="modal fade left" id="period-add-modal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-sm modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true"> Nuevo Período Académico</i></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Per Name Field -->
                <div class="form-group">
                    <label for="per_name">Período:</label>
                    <input type="text" name="per_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="per_letter">Sección:</label>
                    <input type="text" name="per_letter" class="form-control" maxlength="1">
                </div>
                <div class="form-group">
                    <label for="per_startDate">Fecha de Inicio:</label>
                    <input type="date" name="per_startDate" class="form-control">
                </div>
                <div class="form-group">
                    <label for="per_endDate">Fecha de Cierre:</label>
                    <input type="date" name="per_endDate" class="form-control">
                </div>

                <div class="form-group">
                    {!! Form::label('per_status', 'Activar:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('per_status', 0) !!} {!! Form::checkbox('per_status', '1', null) !!}
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

