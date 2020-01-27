<p class="col-sm-12">
    <label for="">Grado/Paralelo:</label>
    <select name="lev_id" class="form-control" id="lev_id">
        @foreach($levels as $lev)
            @if($lev->lev_id == $levelteacher->lev_id)
                <option value="{{$lev->lev_id}}" selected>{{$lev->lev_name}} - {{$lev->lev_parallel}}</option>
            @else
                <option value="{{$lev->lev_id}}">{{$lev->lev_name}} - {{$lev->lev_parallel}}</option>
            @endif 
        @endforeach
    </select>
</p>

<p class="col-sm-12">
    <label for="">Docente:</label>
    <select name="tea_id" class="form-control" id="tea_id">
        @foreach($teachers as $tea) 
            @if($tea->tea_id == $levelteacher->tea_id)
                <option value="{{$tea->tea_id}}" selected>{{$tea->tea_lastName}} {{$tea->tea_name}}</option>
            @else
                <option value="{{$tea->tea_id}}">{{$tea->tea_lastName}} {{$tea->tea_name}}</option>
             @endif  
        @endforeach
    </select>
</p>

<p class="col-sm-12">
    <label for="">Período:</label>
    <select name="per_id" class="form-control" id="per_id">
        @foreach($periods as $per) 
            @if($per->per_id == $levelteacher->per_id)
                <option value="{{$per->per_id}}" selected>{{$per->per_name}} - {{$per->per_letter}}</option>
            @else
                <option value="{{$per->per_id}}">{{$per->per_name}} - {{$per->per_letter}}</option>
            @endif 
        @endforeach
    </select>
</p>

<p class="col-sm-12">
    {!! Form::label('lt_status', 'Activar?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('lt_status', 0) !!} 
        {!! Form::checkbox('lt_status', '1', null) !!}
    </label>
</p>