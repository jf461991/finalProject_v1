@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualización Curso/Paralelo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model($level, ['route' => ['levels.update', $level->lev_id], 'method' => 'patch']) !!}

                    <div class="form-group col-sm-6">
                        <label for="lev_name">Curso/Paralelo:</label>
                        <input type="text" name="lev_name" class="form-control" value="{{$level->lev_name}}">              
                    </div>
                    

                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="{!! route('levels.index') !!}" class="btn btn-default">Cancelar</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        