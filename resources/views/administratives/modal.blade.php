<div id="modal-delete-{{$ad->adm_id}}" class="modal fade left" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    {!! Form::open(['route' => ['administratives.destroy', $ad->adm_id], 'method' => 'delete']) !!}
        <div class="modal-dialog modal-sm modal-notify modal-right modal-danger" role="document">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <h4 class="modal-title">Eliminar Administrativo</h4>
                </div>
                <div class="modal-body">
                    <p>Confirma que desea eliminar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                </div>
            </div>

        </div>
    {{Form::close()}}
</div>