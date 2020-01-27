<div class="form-group col-sm-6">
    <label for="stu_birthDate">Fecha de Matrícula:</label>
    <input type="date" name="enr_date" value="{{$enrolment->enr_date}}" class="form-control">
</div>

<p class="col-sm-6" >
    <label for="">Período:</label>
    <select name="per_id" class="form-control" id="per_id">
        @foreach($periods as $per) 
            @if($per->per_id == $enrolment->per_id)
                <option value="{{$per->per_id}}" selected>{{$per->per_name}} - {{$per->per_letter}}</option>
            @else
                <option value="{{$per->per_id}}">{{$per->per_name}} - {{$per->per_letter}}</option>
            @endif 
        @endforeach
    </select>
</p>

<div class="form-group col-sm-12">
    <!-- <label for="">Asignatura:</label> -->
    <select name="stu_id" id="stu_id" class="form-control selectpicker" data-live-search="true">
        @foreach($students as $st)
        <option value="{{$st->stu_id}}">{{$st->can}}</option>
        @endforeach
    </select>
</div>

<p class="col-sm-12">
    <label for="">Grado:</label>
    <select name="lev_id" class="form-control" id="lev_id">
        @foreach($levels as $lev)
            @if($lev->lev_id == $enrolment->lev_id)
                <option value="{{$lev->lev_id}}" selected>{{$lev->lev_name}} - {{$lev->lev_parallel}}</option>
            @else
                <option value="{{$lev->lev_id}}">{{$lev->lev_name}} - {{$lev->lev_parallel}}</option>
            @endif 
        @endforeach
    </select>
</p>

<p class="col-sm-12">
    {!! Form::label('enr_status', 'Estado') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enr_status', 0) !!} 
        {!! Form::checkbox('enr_status', '1', null) !!}
    </label>
</p>

<p class="col-sm-12">
    {!! Form::label('enr_condition', 'Estado') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enr_condition', 0) !!} 
        {!! Form::checkbox('enr_condition', '1', null) !!}
    </label>
</p>