<div class="modal fade left" id="levtea-add-modal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-sm modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true"> Asignación</i></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-group">
                    <label for="">Grado/Paralelo:</label>
                    <select name="lev_id" id="lev_id" class="form-control">
                        <option value="">....</option>
                        @foreach($levels as $lev)
                            <option value="{{$lev->lev_id}}">{{$lev->lev_name}} - {{$lev->lev_parallel}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Docente:</label>
                    <select name="tea_id" id="tea_id" class="form-control">
                        <option value="">....</option>
                        @foreach($teachers as $tea)
                            <option value="{{$tea->tea_id}}">{{$tea->tea_lastName}} {{$tea->tea_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Período Académico:</label>
                    <select name="per_id" id="per_id" class="form-control">
                        <option value="">Seleccione período vigente</option>
                        @foreach($periods as $per)
                            <option value="{{$per->per_id}}">{{$per->per_name}} - {{$per->per_letter}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    {!! Form::label('lt_status', 'Activar?') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('lt_status', 0) !!} 
                        {!! Form::checkbox('lt_status', '1', null) !!}
                    </label>
                </div>
                                        
            </div>

            <div class="modal-footer">
                {!! Form::submit('Asignar',['class' => 'btn btn-warning']) !!}
                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

