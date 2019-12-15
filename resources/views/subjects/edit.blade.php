@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualización de Asignatura
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model($subject, ['route' => ['subjects.update', $subject->sub_id], 'method' => 'patch']) !!}
                
                    <div class="form-group col-sm-6">
                        <label for="sub_name">Curso/Paralelo:</label>
                        <input type="text" name="sub_name" class="form-control" value="{{$subject->sub_name}}">              
                    </div>
                    

                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="{!! route('subjects.index') !!}" class="btn btn-default">Cancelar</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        