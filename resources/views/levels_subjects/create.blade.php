<div class="modal fade left" id="levsub-add-modal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <label for="">Docente:</label>
                    <select name="tea_id" id="tea_id" class="form-control">
                        <option value="">....</option>
                        @foreach($teachers as $tea)
                            <option value="{{$tea->tea_id}}">{{$tea->tea_name}} {{$tea->tea_lastName}}</option>
                        @endforeach
                    </select>
                </div> 

                <div class="form-group">
                    <label for="">Asignatura:</label>
                    <select name="sub_id" id="sub_id" class="form-control">
                        <option value="">....</option>
                        @foreach($subjects as $sub)
                            <option value="{{$sub->sub_id}}">{{$sub->sub_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Grado/Paralelo:</label>
                    <select name="lev_id" id="lev_id" class="form-control">
                        <option value="">....</option>
                        @foreach($levels as $lev)
                            <option value="{{$lev->lev_id}}">{{$lev->lev_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Período Académico:</label>
                    <select name="per_id" id="per_id" class="form-control">
                        <option value="">Seleccione un período</option>
                        @foreach($periods as $per)
                            <option value="{{$per->per_id}}">{{$per->per_name}}</option>
                        @endforeach
                    </select>
                </div>
                                        
            </div>

            <div class="modal-footer">
                {!! Form::submit('Asignar',['class' => 'btn btn-warning']) !!}
                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

