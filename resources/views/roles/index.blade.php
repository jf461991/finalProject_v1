@extends('layouts.app')


@section('content')
    <style>
        th, td{
            text-align: center;
        }
    </style>

    <section class="content-header">
        <h1 class="pull-left">Lista de Roles</h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#rol-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
                <i class="fa fa-plus-circle"> Añadir Nuevo</i>
            </a>
        </h1>
    </section>

    <div class="content">
        <div class="clearfix"></div>
        <!-- Mensaje registro guardado -->
        @include('flash::message') 
        <!-- Mensaje de validacion de formulario -->
        @include('adminlte-templates::common.errors')
        <!-- Aqui iba los mensajes de error y validacion-->
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <!-- Aqui inicia la tabla-->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered" id="roles-table">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Rol / Perfil</th>
                                <th>Descripción</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $rol)
                                <tr>
                                    <td>{!! $rol->rol_id !!}</td>
                                    <td>{!! $rol->rol_name !!}</td>
                                    <td>{!! $rol->rol_slug !!}</td>
                                    <td>
                                    {!! Form::open(['route' => ['roles.destroy', $rol->rol_id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{!! route('roles.show', [$rol->rol_id]) !!}" class='btn btn-warning'>
                                                <i class="glyphicon glyphicon-eye-open">Ver</i>
                                            </a>
                                            <a href="{!! route('roles.edit', [$rol->rol_id]) !!}" class='btn btn-info'>
                                                <i class="glyphicon glyphicon-edit">Editar</i>
                                            </a>
                                            
                                            {!! Form::button('<i class="glyphicon glyphicon-trash">Eliminar</i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Confirma que desea Eliminar?')"]) !!}
                                        </div>
                                    {!! Form::close() !!}
                                    </td>

                                </tr>
                        </tbody>
                                
                            @endforeach
                    </table>
                </div>
                {{$roles->render()}}


                {!! Form::open(['route' => 'roles.store']) !!}
                    @csrf
                    @include('roles.create')

                {!! Form::close() !!}

            </div>
            <div class="text-center">
        
            </div>
        </div>
    </div> 
@endsection