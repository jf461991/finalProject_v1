@extends('layouts.app')

@section('content')
    <section class="content-header">
        <!-- <h1>
                Actualización de Docente
            </h1> -->
    </section>

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h2 class="box-title">Edición de Registro de Estudiante</h2>
                    </div>
                    {!! Form::model($student, ['route' => ['students.update', $student->stu_id], 'method' => 'patch', 'files' => true]) !!} @csrf
                        <div class="box-body">
                            <div class="row">
                                @include('students.fieldsEdit')
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                <a href="{!! route('students.index') !!}" class="btn btn-default">Cancelar</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        