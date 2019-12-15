@extends('layouts.app')


@section('content')
    <style>
        th, td{
            text-align: center;
        }
    </style>

    <section class="content-header">
        <h1 class="pull-left">Lista de Usuarios</h1>
        <h1 class="pull-right">
            <a href="{!! route('users.create') !!}" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
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
        <div class="clearfix"></div><br>
        @include('users.search')
        <div class="box box-primary">
            <div class="box-body">
                <!-- Aqui inicia la tabla-->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered" id="roles-table">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nombres y Apellidos</th>
                                <th>Cédula</th>
                                <th>Email</th>
                                <th>Rol</th>
                                
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $us)
                                <tr>
                                    <td>{!! $us->id !!}</td>
                                    <td>{!! $us->lastName !!} {!! $us->name !!}</td>
                                    <td>{!! $us->idCard !!}</td>
                                    <td>{!! $us->email !!}</td>
                                    <td>{!! $us->rol_name !!}</td>
                                
                                    <td>
                                    {!! Form::open(['route' => ['users.destroy', $us->id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{!! route('users.show', [$us->id]) !!}" class='btn btn-warning'>
                                                <i class="glyphicon glyphicon-eye-open">Ver</i>
                                            </a>
                                            <a href="{!! route('users.edit', [$us->id]) !!}" class='btn btn-info'>
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
                {{$users->render()}}

            </div>
            <div class="text-center">
        
            </div>
        </div>
    </div> 
@endsection