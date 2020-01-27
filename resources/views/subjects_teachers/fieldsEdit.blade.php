<p class="col-sm-12">
    <label for="">Asignatura:</label>
    <select name="sub_id" class="form-control" id="sub_id">
        @foreach($subjects as $sub)
            @if($sub->sub_id == $subjectteacher->sub_id)
                <option value="{{$sub->sub_id}}" selected>{{$sub->sub_name}}</option>
            @else
                <option value="{{$sub->sub_id}}">{{$sub->sub_name}}</option>
            @endif 
        @endforeach
    </select>
</p>

<p class="col-sm-12">
    <label for="">Docente:</label>
    <select name="tea_id" class="form-control" id="tea_id">
        @foreach($teachers as $tea) 
            @if($tea->tea_id == $subjectteacher->tea_id)
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
            @if($per->per_id == $subjectteacher->per_id)
                <option value="{{$per->per_id}}" selected>{{$per->per_name}} - {{$per->per_letter}}</option>
            @else
                <option value="{{$per->per_id}}">{{$per->per_name}} - {{$per->per_letter}}</option>
            @endif 
        @endforeach
    </select>
</p>

<p class="col-sm-12">
    {!! Form::label('st_status', 'Activar?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('st_status', 0) !!} 
        {!! Form::checkbox('st_status', '1', null) !!}
    </label>
</p>