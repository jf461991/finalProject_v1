@extends('layouts.app')


@section('content')
<section class="content-header">
        <h1>
            Nuevo Docente
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'teachers.store', 'files' => true]) !!}


                        <div class="form-group col-sm-6">
                            <label for="name">Nombres:</label>
                            <input type="text" name="tea_name" value="{{old('tea_name')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Apellidos:</label>
                            <input type="text" name="tea_lastName" value="{{old('tea_lastName')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Cédula:</label>
                            <input type="text" name="tea_idCard" value="{{old('tea_idCard')}}" class="form-control" maxlength="10">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="tea_email">Email:</label>
                            <input type="text" name="tea_email" value="{{old('tea_email')}}" class="form-control">
                        </div>
                        
                        <!-- <div class="form-group col-sm-6">
                            <label for="name">Nombres:</label>
                            <input type="text" name="tea_name" disabled id="tea_name" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Apellidos:</label>
                            <input type="text" name="tea_lastName" disabled id="tea_lastName" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Cédula:</label>
                            <input type="text" name="tea_idCard" disabled id="tea_idCard" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="tea_email">Email:</label>
                            <input type="text" name="tea_email" disabled id="tea_email" class="form-control">
                        </div> -->

                        <div class="form-group col-sm-6">
                            <label for="tea_birthDate">Fecha de Nacimiento:</label>
                            <input type="date" name="tea_birthDate" value="{{old('tea_birthDate')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="tea_address">Dirección:</label>
                            <input type="text" name="tea_address" value="{{old('tea_address')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="tea_city">Ciudad:</label>
                            <input type="text" name="tea_city" value="{{old('tea_city')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Género:</label>
                            <select name="tea_gender" class="form-control" id="tea_gender">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="tea_phone">Teléfono:</label>
                            <input type="text" name="tea_phone" value="{{old('tea_phone')}}" class="form-control">
                        </div>

                        

                        <div class="form-group col-sm-6">
                            <label for="tea_photo">Foto:</label>
                            <input type="file" name="tea_photo" class="form-control">
                        </div>

            
                        <div class="form-group col-sm-12">
                        {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                        <a href="{!! route('teachers.index') !!}" class="btn btn-warning">Cancelar</a>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
                   
@endsection



                              

