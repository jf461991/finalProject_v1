@extends('layouts.app')


@section('content')
    <style>
        th, td{
            text-align: center;
        }
    </style>

    <section class="content-header">
        <h1 class="pull-left">Lista de Docentes</h1>
        <h1 class="pull-right">
            <a href="{!! route('teachers.create') !!}" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
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
        @include('teachers.search')
        <div class="box box-primary">
            <div class="box-body">
                <!-- Aqui inicia la tabla-->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered" id="roles-table">
                        <thead class="thead-dark">
                            <tr>
                                <th>N°</th>
                                <th>Apellidos y Nombres</th>
                                <th>Cédula</th>
                                <th>Foto</th>
                                <th>Estado</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $te)
                                <tr>
                                    <td>{!! $te->tea_id !!}</td>
                                    <td>{!! $te->tea_lastName !!} {!! $te->tea_name !!}</td>
                                    <td>{!! $te->tea_idCard !!}</td>
                                    <td>
                                        <img src="{{asset('/images/teachers/'.$te->tea_photo)}}" alt="Foto" height="50px" width="50px" class="img-thumbnail">
                                    </td>
                                    <td class="dataTable">
                                        @if($te->tea_status == 1)
                                            <span class="text-success"><b>Activo</b></span>
                                        @else
                                            <span class="text-danger"><b>Inactivo</b></span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class='btn-group'>
                                            <a href="{!! route('teachers.show', [$te->tea_id]) !!}" class='btn btn-warning'>
                                                <i class="glyphicon glyphicon-eye-open">Ver</i>
                                            </a>
                                            <a href="{!! route('teachers.edit', [$te->tea_id]) !!}" class='btn btn-info'>
                                                <i class="glyphicon glyphicon-edit">Editar</i>
                                            </a>
                                            <a data-toggle="modal" data-target="#modal-delete-{{$te->tea_id}}" class='btn btn-danger'>
                                                <i class="glyphicon glyphicon-trash">Eliminar</i>
                                            </a>
                                        </div>
                                    </td>

                                </tr>
                        </tbody>
                            @include('teachers.modal')      
                            @endforeach
                    </table>
                </div>
                {{$teachers->render()}}

            </div>
            <div class="text-center">
        
            </div>
        </div>
    </div> 
@endsection