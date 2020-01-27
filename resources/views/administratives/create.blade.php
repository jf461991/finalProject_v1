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
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h2 class="box-title">Registro de Nuevo Administrativo</h2>
                    </div>
                    {!! Form::open(['route' => 'administratives.store', 'files' => true]) !!}
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                @include('administratives.fieldsCreate')
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="">
                                <button type="submit" class="btn btn-success">Registrar</button>
                                <a href="{!! route('administratives.index') !!}" class="btn btn-warning">Cancelar</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>            
@endsection



                              

