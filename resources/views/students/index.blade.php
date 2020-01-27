@extends('layouts.app')


@section('content')
    
    <section class="content-header">
        <h1 class="pull-left">Lista de Estudiantes</h1>
        <h1 class="pull-right">
            <a href="{!! route('students.create') !!}" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">
                <i class="fa fa-plus-circle"> Añadir Nuevo Estudiante</i>
            </a>
        </h1>
        
    </section>
    

    <div class="content">
        <div class="clearfix"></div>
        <!-- Mensaje registro guardado -->
         
        <!-- Mensaje de validacion de formulario -->
        @include('adminlte-templates::common.errors')
        <!-- Aqui iba los mensajes de error y validacion-->
        
        <div class="clearfix"></div><br>
        @include('flash::message')
        @include('students.search')
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
                            @foreach($students as $st)
                                <tr>
                                    <td class="dataTable">{!! $st->stu_id !!}</td>
                                    <td class="dataTable">{!! $st->stu_lastName !!} {!! $st->stu_name !!}</td>
                                    <td class="dataTable">{!! $st->stu_idCard !!}</td>
                                    <td class="dataTable">
                                        <img src="{{asset('/images/students/'.$st->stu_photo)}}" alt="Foto" height="50px" width="50px" class="img-thumbnail">
                                    </td>
                                    <td class="dataTable">
                                        @if($st->stu_status == 1)
                                            <span class="text-success"><b>Activo</b></span>
                                        @else
                                            <span class="text-danger"><b>Inactivo</b></span>
                                        @endif
                                    </td>
                                    <td class="dataTable">
                                    
                                        <div class='btn-group'>
                                            <a href="{!! route('students.show', [$st->stu_id]) !!}" class='btn btn-warning'>
                                                <i class="glyphicon glyphicon-eye-open"></i>
                                            </a>
                                            <a href="{!! route('students.edit', [$st->stu_id]) !!}" class='btn btn-info'>
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>

                                            <a data-toggle="modal" data-target="#modal-delete-{{$st->stu_id}}" class='btn btn-danger'>
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </a>
                                            
                                            
                                        </div>
                                    
                                    </td>

                                </tr>
                        </tbody>
                            @include('students.modal')    
                            @endforeach
                    </table>
                </div>
                {{$students->render()}}

            </div>
            <div class="text-center">
        
            </div>
        </div>
    </div> 
@endsection