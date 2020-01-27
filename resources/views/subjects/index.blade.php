@extends('layouts.app')


@section('content')
    <style>
        th, td{
            text-align: center;
        }
    </style>

    <section class="content-header">
        <h1 class="pull-left">Lista de Asignaturas</h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#subject-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
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
                                <th>Nombre Asignatura</th>
                                <th>Estado</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subjects as $sub)
                                <tr>
                                    <td>{!! $sub->sub_id !!}</td>
                                    <td>{!! $sub->sub_name !!}</td>
                                    <td class="dataTable">
                                        @if($sub->sub_status == 1)
                                            <span class="text-success"><b>Activo</b></span>
                                        @else
                                            <span class="text-danger"><b>Inactivo</b></span>
                                        @endif
                                    </td>
                                    <td>
                                    
                                        <div class='btn-group'>
                                            <a href="{!! route('subjects.show', [$sub->sub_id]) !!}" class='btn btn-warning'>
                                                <i class="glyphicon glyphicon-eye-open">Ver</i>
                                            </a>
                                            <a href="{!! route('subjects.edit', [$sub->sub_id]) !!}" class='btn btn-info'>
                                                <i class="glyphicon glyphicon-edit">Editar</i>
                                            </a>
                                            <a data-toggle="modal" data-target="#modal-delete-{{$sub->sub_id}}" class='btn btn-danger'>
                                                <i class="glyphicon glyphicon-trash">Eliminar</i>
                                            </a>   
                                        </div>
                                    
                                    </td>

                                </tr>
                        </tbody>
                            @include('subjects.modal')    
                            @endforeach
                    </table>
                </div>
                {{$subjects->render()}}


                {!! Form::open(['route' => 'subjects.store']) !!}
                    @csrf
                    @include('subjects.create')

                {!! Form::close() !!}

            </div>
            <div class="text-center">
        
            </div>
        </div>
    </div> 
@endsection