@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualización de Rol
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($student, ['route' => ['students.update', $student->stu_id], 'method' => 'patch', 'files' => true]) !!}


                        <div class="form-group col-sm-6">
                            <label for="name">Nombres:</label>
                            <input type="text" name="stu_name" value="{{$student->stu_name}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Apellidos:</label>
                            <input type="text" name="stu_lastName" value="{{$student->stu_lastName}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Cédula:</label>
                            <input type="text" name="stu_idCard" value="{{$student->stu_idCard}}" class="form-control" maxlength="10">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_email">Email:</label>
                            <input type="text" name="stu_email" value="{{$student->stu_email}}" class="form-control">
                        </div>
                        
                        <!-- <div class="form-group col-sm-6">
                            <label for="name">Nombres:</label>
                            <input type="text" name="stu_name" disabled id="stu_name" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Apellidos:</label>
                            <input type="text" name="stu_lastName" disabled id="stu_lastName" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Cédula:</label>
                            <input type="text" name="stu_idCard" disabled id="stu_idCard" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_email">Email:</label>
                            <input type="text" name="stu_email" disabled id="stu_email" class="form-control">
                        </div> -->

                        <div class="form-group col-sm-6">
                            <label for="stu_birthDate">Fecha de Nacimiento:</label>
                            <input type="date" name="stu_birthDate" value="{{$student->stu_birthDate}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_address">Dirección:</label>
                            <input type="text" name="stu_address" value="{{$student->stu_address}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_city">Ciudad:</label>
                            <input type="text" name="stu_city" value="{{$student->stu_city}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Género:</label>
                            <select name="stu_gender" class="form-control" id="stu_gender">
                                @if(($student->stu_gender) == "Masculino")
                                    <option value="Masculino" selected>Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                @else
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino" selected>Femenino</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_phone">Teléfono:</label>
                            <input type="text" name="stu_phone" value="{{$student->stu_phone}}" class="form-control">
                        </div>

                        

                        <div class="form-group col-sm-6">
                            <label for="stu_photo">Foto:</label>
                            <input type="file" name="stu_photo" class="form-control">
                            @if(($student->stu_photo) != "")
                                <img src="{{asset('/images/students/'.$student->stu_photo)}}" alt="Foto" 
                                height="200px" width="200px" class="img-thumbnail">
                            @endif
                        </div>
                        

                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{!! route('students.index') !!}" class="btn btn-default">Cancelar</a>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        