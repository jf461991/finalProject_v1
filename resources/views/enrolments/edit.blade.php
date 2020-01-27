@extends('layouts.app')

@section('content')
    <section class="content-header">
        <!-- <h1>
                Actualización de Docente
            </h1> -->
    </section>

    <section class="content">
        @include('adminlte-templates::common.errors')
        <div class="row">
            <div class="col-sm-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h2 class="box-title">Editar Matrícula</h2>
                    </div>
                    {!! Form::model($enrolment, ['route' => ['enrolments.update', $enrolment->enr_id], 'method' => 'patch']) !!}
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                @include('enrolments.fieldsEdit')
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                <a href="{!! route('enrolments.index') !!}" class="btn btn-warning">Cancelar</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>            
@endsection
                        