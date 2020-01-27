<p class="col-sm-6">
    <label for="per_name">Período:</label>
    <input type="text" name="per_name" class="form-control" value="{{$period->per_name}}">
</p>
<p class="col-sm-6">
    <label for="per_letter">Sección:</label>
    <input type="text" name="per_letter" class="form-control" value="{{$period->per_letter}}" maxlength="1">
</p>
<p class="col-sm-6">
    <label for="per_startDate">Fecha de Inicio:</label>
    <input type="date" name="per_startDate" class="form-control" value="{{$period->per_startDate}}">
</p>
<p class="col-sm-6">
    <label for="per_endDate">Fecha de Cierre:</label>
    <input type="date" name="per_endDate" class="form-control" value="{{$period->per_endDate}}">
</p>

<p class="col-sm-6">
    {!! Form::label('per_status', 'Activar?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('per_status', 0) !!} 
        {!! Form::checkbox('per_status', '1', null) !!}
    </label>
</p>