@extends('layouts.app')


@section('content')

    <section class="content-header">
        <h1 class="pull-left"></h1>
        <h1 class="pull-right">
            <a href="{!! route('enrolments.create') !!}" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
                <i class="fa fa-plus-circle"> Nueva Matrícula</i>
            </a>
        </h1>
    </section>

    <section class="content">
        <div class="clearfix"></div>
        <!-- field message register -->
        @include('flash::message') 
        
        @include('adminlte-templates::common.errors')
        
        <div class="clearfix"></div>
        @include('enrolments.search')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de Estudiantes Matriculados</h3>
            </div>
            <div class="box-body">
                <!-- Here start my table-->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered" id="roles-table">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Cédula</th>
                                <th>Estudiante</th>  
                                <th>Grado</th>                 
                                <th>Período</th>
                                <th>Estado</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enrolments as $en)
                                <tr>
                                    <td class="dataTable">{!! $en->enr_id !!}</td>
                                    <td class="dataTable">{!! $en->stu_idCard !!}</td>
                                    <td class="dataTable">{!! $en->stu_lastName !!} {!! $en->stu_name !!}</td>
                                    <td class="dataTable">{!! $en->lev_name !!} - {!! $en->lev_parallel !!}</td>
                                    <td class="dataTable">{!! $en->per_name !!} - {!! $en->per_letter !!}</td>
                                    <td class="dataTable">
                                        @if($en->enr_status == 1)
                                            <span class="text-primary"><b>Matriculado</b></span>
                                        @else
                                            <span class="text-warning"><b>No Matriculado</b></span>
                                        @endif
                                    </td>
                                    <td class="dataTable">
                                        {!! Form::open(['route' => ['enrolments.destroy', $en->enr_id], 'method' => 'delete']) !!}
                                            <div class='btn-group'>
                                                <a href="{!! route('enrolments.show', [$en->enr_id]) !!}" class='btn btn-warning'>
                                                    <i class="glyphicon glyphicon-eye-open">Ver</i>
                                                </a>
                                                <a href="{!! route('enrolments.edit', [$en->enr_id]) !!}" class='btn btn-info'>
                                                    <i class="glyphicon glyphicon-edit">Editar</i>
                                                </a>
                                                <a data-toggle="modal" data-target="#modal-delete-{{$en->enr_id}}" class='btn btn-danger'>
                                                <i class="glyphicon glyphicon-trash">Eliminar</i>
                                                </a>
                                            </div>
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                        </tbody>
                            @include('enrolments.modal')
                            @endforeach
                    </table>
                </div>
                
                

                

            </div>
            <div class="box-footer">
                {{$enrolments->render()}}
            </div>
        </div>
    </section> 
@endsection