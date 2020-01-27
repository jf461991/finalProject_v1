<div class="form-group col-sm-6">
    <label for="per_endDate">Fecha Actual:</label>
    <input type="date" name="enr_date" id="enr_date" disabled value="{{$now->format('Y-m-d')}}">
</div>

<div class="form-group col-sm-6">
    <label for="">Período Académico Actual:</label>
    <select name="per_id" id="per_id" class="form-control">
        @foreach($periods as $per)
        <option value="{{$per->per_id}}">{{$per->per_name}} - {{$per->per_letter}}</option>
        @endforeach
    </select>
</div>

<div class="form-group col-sm-12">
    <!-- <label for="">Asignatura:</label> -->
    <select name="stu_id" id="stu_id" class="form-control selectpicker" data-live-search="true">
        <option value="">Buscar Estudiante...</option>
        @foreach($students as $st)
        <option value="{{$st->stu_id}}">{{$st->can}}</option>
        @endforeach
    </select>
</div>

<div class="form-group col-sm-12">
    <label for="">Grado:</label>
    <select name="lev_id" id="lev_id" class="form-control">
        <option value="">....</option>
        @foreach($levels as $lev)
        <option value="{{$lev->lev_id}}">{{$lev->lev_name}} - {{$lev->lev_parallel}}</option>
        @endforeach
    </select>
</div>

<div class="form-group col-sm-12">
    {!! Form::label('enr_status', 'Activar Matrícula') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enr_status', 0) !!} 
        {!! Form::checkbox('enr_status', '1', null) !!}
    </label>
</div>

<!-- <div class="form-group col-sm-12">
    {!! Form::label('enr_condition', 'Activar?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enr_condition', 0) !!} 
        {!! Form::checkbox('enr_condition', '1', null) !!}
    </label>
</div> -->