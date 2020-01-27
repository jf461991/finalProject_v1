@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualización de Rol
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model($rol, ['route' => ['roles.update', $rol->rol_id], 'method' => 'patch']) !!}

                    <div class="form-group col-sm-6">
                        <label for="rol_name">Rol:</label>
                        <input type="text" name="rol_name" class="form-control" value="{{$rol->rol_name}}">              
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="rol_slug">Descripción:</label>
                        <input type="text" name="rol_slug" class="form-control" value="{{$rol->rol_slug}}">              
                    </div>
                    

                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="{!! route('roles.index') !!}" class="btn btn-default">Cancelar</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        