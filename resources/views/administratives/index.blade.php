@extends('layouts.app')


@section('content')
    <style>
        th, td{
            text-align: center;
        }
    </style>

    <section class="content-header">
        <h1 class="pull-left">Lista de Personal Administrativo</h1>
        <h1 class="pull-right">
            <a href="{!! route('administratives.create') !!}" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
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
        @include('administratives.search')
        <div class="box box-primary">
            <div class="box-body">
                <!-- Aqui inicia la tabla-->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered" id="roles-table">
                        <thead>
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
                            @foreach($administratives as $ad)
                                <tr>
                                    <td>{!! $ad->adm_id !!}</td>
                                    <td>{!! $ad->adm_lastName !!} {!! $ad->adm_name !!}</td>
                                    <td>{!! $ad->adm_idCard !!}</td>
                                    <td>
                                        <img src="{{asset('/images/administratives/'.$ad->adm_photo)}}" alt="Foto" height="50px" width="50px" class="img-thumbnail">
                                    </td>
                                    <td class="dataTable">
                                        @if($ad->adm_status == 1)
                                            <span class="text-success"><b>Activo</b></span>
                                        @else
                                            <span class="text-danger"><b>Inactivo</b></span>
                                        @endif
                                    </td>
                                    <td>
                                    
                                        <div class='btn-group'>
                                            <a href="{!! route('administratives.show', [$ad->adm_id]) !!}" class='btn btn-warning'>
                                                <i class="glyphicon glyphicon-eye-open">Ver</i>
                                            </a>
                                            <a href="{!! route('administratives.edit', [$ad->adm_id]) !!}" class='btn btn-info'>
                                                <i class="glyphicon glyphicon-edit">Editar</i>
                                            </a>
                                            <a data-toggle="modal" data-target="#modal-delete-{{$ad->adm_id}}" class='btn btn-danger'>
                                                <i class="glyphicon glyphicon-trash">Eliminar</i>
                                            </a>
                                        </div>
                                    
                                    </td>

                                </tr>
                        </tbody>
                            @include('administratives.modal')    
                            @endforeach
                    </table>
                </div>
                {{$administratives->render()}}

            </div>
            <div class="text-center">
        
            </div>
        </div>
    </div> 
@endsection