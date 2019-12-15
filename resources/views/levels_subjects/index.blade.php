@extends('layouts.app')


@section('content')

    <section class="content-header">
        <h1 class="pull-left">Asignaciones Docente-Materia-Grado</h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#levsub-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
                <i class="fa fa-plus-circle"> Añadir nuevo</i>
            </a>
        </h1>
    </section>

    <div class="content">
        <div class="clearfix"></div>
        <!-- field message register -->
        @include('flash::message') 
        
        @include('adminlte-templates::common.errors')
        
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <!-- Here start my table-->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered" id="roles-table">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Docente</th>
                                <th>Grado/Paralelo</th>
                                <th>Asignatura</th>                  
                                <th>Período</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($levels_subjects as $ls)
                                <tr>
                                    <td class="dataTable">{!! $ls->lesute_id !!}</td>
                                    <td class="dataTable">{!! $ls->tea_name !!} {!! $ls->tea_lastName !!}</td>
                                    <td class="dataTable">{!! $ls->lev_name !!}</td>
                                    <td class="dataTable">{!! $ls->sub_name !!}</td>
                                    <td class="dataTable">{!! $ls->per_name !!}</td>
                                    <td class="dataTable">
                                    {!! Form::open(['route' => ['levels_subjects.destroy', $ls->lesute_id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{!! route('levels_subjects.show', [$ls->lesute_id]) !!}" class='btn btn-warning'>
                                                <i class="glyphicon glyphicon-eye-open">Ver</i>
                                            </a>
                                            <a href="{!! route('levels_subjects.edit', [$ls->lesute_id]) !!}" class='btn btn-info'>
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
                {{$levels_subjects->render()}}
                

                {!! Form::open(['route' => 'levels_subjects.store']) !!}

                    @include('levels_subjects.create')

                {!! Form::close() !!}

            </div>
            <div class="text-center">
        
            </div>
        </div>
    </div> 
@endsection