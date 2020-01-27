<p class="col-sm-6">
    <label for="sub_name">Nombre asignatura:</label>
    <input type="text" name="sub_name" class="form-control" value="{{$subject->sub_name}}">
</p>

<p class="col-sm-6">
    {!! Form::label('sub_status', 'Activar?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('sub_status', 0) !!} 
        {!! Form::checkbox('sub_status', '1', null) !!}
    </label>
</p>