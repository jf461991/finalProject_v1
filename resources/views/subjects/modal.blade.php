<div id="modal-delete-{{$sub->sub_id}}" class="modal fade left" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    {!! Form::open(['route' => ['subjects.destroy', $sub->sub_id], 'method' => 'delete']) !!}

        <div class="modal-dialog modal-danger modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Asignatura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Confirma que desea eliminar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning">Aceptar</button>
                </div>
            </div>
        </div>

    {{Form::close()}}
</div>