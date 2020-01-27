@extends('layouts.app')


@section('content')
    <section class="content-header">
        <h1 class="pull-left"></h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#levtea-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
                <i class="fa fa-plus-circle"> Añadir nuevo</i>
            </a>
        </h1>
    </section>

    <section class="content">
        <div class="clearfix"></div>
        <!-- field message register -->
        @include('flash::message') 
        
        @include('adminlte-templates::common.errors')
        
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de Asignaciones de Docentes a Grados</h3>
            </div>
            <div class="box-body">
                <!-- Here start my table-->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered" id="roles-table">
                        <thead>
                            <tr>
                            <th>N°</th>
                                <th>Grado/Paralelo</th>
                                <th>Docente</th>                  
                                <th>Período</th>
                                <th>Estado</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($levels_teachers as $lt)
                                <tr>
                                    <td class="dataTable">{!! $lt->lt_id !!}</td>
                                    <td class="dataTable">{!! $lt->lev_name !!} - {!! $lt->lev_parallel !!}</td>
                                    <td class="dataTable">{!! $lt->tea_name !!} {!! $lt->tea_lastName !!}</td>
                                    <td class="dataTable">{!! $lt->per_name !!} - {!! $lt->per_letter !!}</td>
                                    <td class="dataTable">
                                        @if($lt->lt_status == 1)
                                            <span class="text-success"><b>Activo</b></span>
                                        @else
                                            <span class="text-danger"><b>Inactivo</b></span>
                                        @endif
                                    </td>
                                    <td class="dataTable">
                                    
                                        <div class='btn-group'>
                                            <a href="{!! route('levels_teachers.show', [$lt->lt_id]) !!}" class='btn btn-warning'>
                                            <i class="glyphicon glyphicon-eye-open">Ver</i>
                                            </a>
                                            <a href="{!! route('levels_teachers.edit', [$lt->lt_id]) !!}" class='btn btn-info'>
                                            <i class="glyphicon glyphicon-edit">Editar</i>
                                            </a>
                                            <a data-toggle="modal" data-target="#modal-delete-{{$lt->lt_id}}" class='btn btn-danger'>
                                            <i class="glyphicon glyphicon-trash">Eliminar</i>
                                            </a>
                                            
                                            
                                        </div>
                                    
                                    </td>

                                </tr>
                        </tbody>
                            @include('levels_teachers.modal')
                            @endforeach
                    </table>
                </div>
                
                {!! Form::open(['route' => 'levels_teachers.store']) !!}
                    @csrf
                    @include('levels_teachers.create')

                {!! Form::close() !!}

            </div>
            <div class="box-footer">
                {{$levels_teachers->render()}}
            </div>
        
        </div>
    </section> 
@endsection