@extends('layouts.app')


@section('content')
<style>
        th, td{
            text-align: center;
        }
    </style>

    <section class="content-header">
        <h1 class="pull-left">Lista de Períodos Académicos</h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#period-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
                <i class="fa fa-plus-circle"> Añadir Nuevo</i>
            </a>
        </h1>
    </section>

    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message') 
        <!-- Mensaje de validacion de formulario -->
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <!-- Aqui inicia la tabla-->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered" id="roles-table">
                        <thead class="thead-dark">
                            <tr>
                                <th>N°</th>
                                <th>Período Académico</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Cierre</th>
                                <th>Estado</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($periods as $per)
                                <tr>
                                    <td>{!! $per->per_id !!}</td>
                                    <td>{!! $per->per_name !!} - {!! $per->per_letter !!}</td>
                                    <td>{!! $per->per_startDate !!}</td>
                                    <td>{!! $per->per_endDate !!}</td>
                                    <td>
                                        @if($per->per_status == 1)
                                            <span class="text-success"><b>Activo</b></span>
                                        @else
                                            <span class="text-danger"><b>Inactivo</b></span>
                                        @endif
                                    </td>
                                    <td>
                                    
                                        <div class='btn-group'>
                                            <a href="{!! route('periods.show', [$per->per_id]) !!}" class='btn btn-warning'>
                                                <i class="glyphicon glyphicon-eye-open">Ver</i>
                                            </a>
                                            <a href="{!! route('periods.edit', [$per->per_id]) !!}" class='btn btn-info'>
                                                <i class="glyphicon glyphicon-edit">Editar</i>
                                            </a>
                                            <a data-toggle="modal" data-target="#modal-delete-{{$per->per_id}}" class='btn btn-danger'>
                                                <i class="glyphicon glyphicon-trash">Eliminar</i>
                                            </a>                                            
                                        </div>
                                    
                                    </td>

                                </tr>
                        </tbody>
                            @include('periods.modal') 
                            @endforeach
                    </table>
                </div>
                {{$periods->render()}}


                {!! Form::open(['route' => 'periods.store']) !!}
                    @csrf
                    @include('periods.create')

                {!! Form::close() !!}

            </div>
            <div class="text-center">
        
            </div>
        </div>
    </div> 
@endsection