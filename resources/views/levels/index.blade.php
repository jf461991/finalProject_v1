@extends('layouts.app')


@section('content')
    <style>
        th, td{
            text-align: center;
        }
    </style>

    <section class="content-header">
        <h1 class="pull-left">Lista de Cursos</h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#level-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
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
                                <th>Curso/Paralelo</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($levels as $lev)
                                <tr>
                                    <td>{!! $lev->lev_id !!}</td>
                                    <td>{!! $lev->lev_name !!}</td>
                                    <td>
                                    {!! Form::open(['route' => ['levels.destroy', $lev->lev_id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{!! route('levels.show', [$lev->lev_id]) !!}" class='btn btn-warning'>
                                                <i class="glyphicon glyphicon-eye-open">Ver</i>
                                            </a>
                                            <a href="{!! route('levels.edit', [$lev->lev_id]) !!}" class='btn btn-info'>
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
                {{$levels->render()}}


                {!! Form::open(['route' => 'levels.store']) !!}

                    @include('levels.create')

                {!! Form::close() !!}

            </div>
            <div class="text-center">
        
            </div>
        </div>
    </div> 
@endsection