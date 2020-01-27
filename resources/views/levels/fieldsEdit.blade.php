
<p class="col-sm-12">
    <label for="lev_name">Curso:</label>
    <input type="text" name="lev_name" class="form-control" value="{{$level->lev_name}}">
</p>

<p class="col-sm-12">
    <label for="lev_parallel">Paralelo:</label>
    <input type="text" name="lev_parallel" class="form-control" value="{{$level->lev_parallel}}" maxlength="1">
</p>

<p class="col-sm-12">
    {!! Form::label('lev_status', 'Activar:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('lev_status', 0) !!} 
        {!! Form::checkbox('lev_status', '1', null) !!}
    </label>
</p>