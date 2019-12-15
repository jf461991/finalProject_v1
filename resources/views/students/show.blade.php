@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ficha del estudiante
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    <div class="form-group col-sm-12">
                        
                        @if(($student->stu_photo) != "")
                            <img src="{{asset('/images/students/'.$student->stu_photo)}}" alt="Foto" 
                            height="150px" width="150px" class="img-thumbnail">
                        @endif
                    </div>
                    
                    <div class="form-group col-sm-4">
                        {!! Form::label('user_id', 'ID. Estudiante:') !!}
                        <p>{!! $student->stu_id !!}</p>
                    </div>

                    <!-- Stu Firstname Field -->
                    <div class="form-group col-sm-4">
                        {!! Form::label('stu_name', 'Nombres:') !!}
                        <p>{!! $student->stu_name !!}</p>
                    </div>

                    <!-- Stu Lastname Field -->
                    <div class="form-group col-sm-4">
                        {!! Form::label('stu_lastName', 'Apellidos:') !!}
                        <p>{!! $student->stu_lastName !!}</p>
                    </div>

                    <!-- Stu Idcard Field -->
                    <div class="form-group col-sm-4">
                        {!! Form::label('stu_idCard', 'Cédula:') !!}
                        <p>{!! $student->stu_idCard !!}</p>
                    </div>

                    <!-- Stu Birthdate Field -->
                    <div class="form-group col-sm-4">
                        {!! Form::label('stu_birthDate', 'Fecha de nacimiento:') !!}
                        <p>{!! $student->stu_birthDate !!}</p>
                    </div>

                    <!-- Stu Address Field -->
                    <div class="form-group col-sm-4">
                        {!! Form::label('stu_address', 'Domicilio:') !!}
                        <p>{!! $student->stu_address !!}</p>
                    </div>

                    <!-- Stu City Field -->
                    <div class="form-group col-sm-4">
                        {!! Form::label('stu_city', 'Ciudad:') !!}
                        <p>{!! $student->stu_city !!}</p>
                    </div>

                    <!-- Stu Gender Field -->
                    <div class="form-group col-sm-4">
                        <label for="">Género:</label>
                            @if(($student->stu_gender) == "Masculino")
                                <p>Masculino</p>
                            @else
                                <p>Femenino</p>
                            @endif
                        </select>
                    </div>

                    <!-- Stu Phone Field -->
                    <div class="form-group col-sm-4">
                        {!! Form::label('stu_phone', 'Teléfono:') !!}
                        <p>{!! $student->stu_phone !!}</p>
                    </div>

                    <!-- Stu Email Field -->
                    <div class="form-group col-sm-4">
                        {!! Form::label('stu_email', 'Correo electrónico:') !!}
                        <p>{!! $student->stu_email !!}</p>
                    </div>

                    <!-- Stu Image Field -->
                    
                    <div class="form-group col-sm-12">
                        <a href="{!! route('students.index') !!}" class="btn btn-primary">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection