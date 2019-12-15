@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualizacíon Período Académico
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model($period, ['route' => ['periods.update', $period->per_id], 'method' => 'patch']) !!}

                    <div class="form-group col-sm-6">
                        <label for="per_name">Período:</label>
                        <input type="text" name="per_name" class="form-control" value="{{$period->per_name}}">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="per_startDate">Fecha de Inicio:</label>
                        <input type="date" name="per_startDate" class="form-control" value="{{$period->per_startDate}}">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="per_endDate">Fecha de Cierre:</label>
                        <input type="date" name="per_endDate" class="form-control" value="{{$period->per_endDate}}">
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('per_status', 'Estado:') !!}
                        <label class="checkbox-inline">
                            {!! Form::hidden('per_status', 0) !!}
                            {!! Form::checkbox('per_status', '1', null) !!}
                        </label>
                    </div>

                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="{!! route('periods.index') !!}" class="btn btn-default">Cancelar</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        