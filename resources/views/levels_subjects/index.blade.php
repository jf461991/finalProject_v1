@extends('layouts.app')


@section('content')

    <section class="content-header">
        <h1 class="pull-left"></h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#levsub-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
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
                <h3 class="box-title">Lista de Asignaciones de Materias a Grados</h3>
            </div>
            <div class="box-body">
                <!-- Here start my table-->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered" id="roles-table">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Grado/Paralelo</th>
                                <th>Asignatura</th>                  
                                <th>Período</th>
                                <th>Estado</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($levels_subjects as $ls)
                                <tr>
                                    <td class="dataTable">{!! $ls->ls_id !!}</td>
                                    <td class="dataTable">{!! $ls->lev_name !!} - {!! $ls->lev_parallel !!}</td>
                                    <td class="dataTable">{!! $ls->sub_name !!}</td>
                                    <td class="dataTable">{!! $ls->per_name !!} - {!! $ls->per_letter !!}</td>
                                    <td class="dataTable">
                                        @if($ls->ls_status == 1)
                                            <span class="text-success"><b>Activo</b></span>
                                        @else
                                            <span class="text-danger"><b>Inactivo</b></span>
                                        @endif
                                    </td>
                                    <td class="dataTable">
                                        {!! Form::open(['route' => ['levels_subjects.destroy', $ls->ls_id], 'method' => 'delete']) !!}
                                            <div class='btn-group'>
                                                <a href="{!! route('levels_subjects.show', [$ls->ls_id]) !!}" class='btn btn-warning'>
                                                    <i class="glyphicon glyphicon-eye-open">Ver</i>
                                                </a>
                                                <a href="{!! route('levels_subjects.edit', [$ls->ls_id]) !!}" class='btn btn-info'>
                                                    <i class="glyphicon glyphicon-edit">Editar</i>
                                                </a>
                                                <a data-toggle="modal" data-target="#modal-delete-{{$ls->ls_id}}" class='btn btn-danger'>
                                                <i class="glyphicon glyphicon-trash">Eliminar</i>
                                                </a>
                                            </div>
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                        </tbody>
                            @include('levels_subjects.modal')
                            @endforeach
                    </table>
                </div>
                
                

                {!! Form::open(['route' => 'levels_subjects.store']) !!}
                    @csrf
                    @include('levels_subjects.create')

                {!! Form::close() !!}

            </div>
            <div class="box-footer">
                {{$levels_subjects->render()}}
            </div>
        </div>
    </section> 
@endsection