<p class="col-sm-12">
    <label for="">Grado/Paralelo:</label>
    <select name="lev_id" class="form-control" id="lev_id">
        @foreach($levels as $lev)
            @if($lev->lev_id == $levelsubject->lev_id)
                <option value="{{$lev->lev_id}}" selected>{{$lev->lev_name}} - {{$lev->lev_parallel}}</option>
            @else
                <option value="{{$lev->lev_id}}">{{$lev->lev_name}} - {{$lev->lev_parallel}}</option>
            @endif 
        @endforeach
    </select>
</p>

<p class="col-sm-12">
    <label for="">Asignatura:</label>
    <select name="sub_id" class="form-control" id="sub_id">
        @foreach($subjects as $sub) 
            @if($sub->sub_id == $levelsubject->sub_id)
                <option value="{{$sub->sub_id}}" selected>{{$sub->sub_name}}</option>
            @else
                <option value="{{$sub->sub_id}}">{{$sub->sub_name}}</option>
            @endif 
        @endforeach
    </select>
</p>

<p class="col-sm-12" >
    <label for="">Período:</label>
    <select name="per_id" class="form-control" id="per_id">
        @foreach($periods as $per) 
            @if($per->per_id == $levelsubject->per_id)
                <option value="{{$per->per_id}}" selected>{{$per->per_name}} - {{$per->per_letter}}</option>
            @else
                <option value="{{$per->per_id}}">{{$per->per_name}} - {{$per->per_letter}}</option>
            @endif 
        @endforeach
    </select>
</p>

<p class="col-sm-12">
    {!! Form::label('ls_status', 'Activar?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('ls_status', 0) !!} 
        {!! Form::checkbox('ls_status', '1', null) !!}
    </label>
</p>