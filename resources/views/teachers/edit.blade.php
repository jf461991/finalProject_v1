@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualización de Docente
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($teacher, ['route' => ['teachers.update', $teacher->tea_id], 'method' => 'patch', 'files' => true]) !!}


                        <div class="form-group col-sm-6">
                            <label for="name">Nombres:</label>
                            <input type="text" name="tea_name" value="{{$teacher->tea_name}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Apellidos:</label>
                            <input type="text" name="tea_lastName" value="{{$teacher->tea_lastName}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Cédula:</label>
                            <input type="text" name="tea_idCard" value="{{$teacher->tea_idCard}}" class="form-control" maxlength="10">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="tea_email">Email:</label>
                            <input type="text" name="tea_email" value="{{$teacher->tea_email}}" class="form-control">
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
                            <input type="date" name="tea_birthDate" value="{{$teacher->tea_birthDate}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="tea_address">Dirección:</label>
                            <input type="text" name="tea_address" value="{{$teacher->tea_address}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="tea_city">Ciudad:</label>
                            <input type="text" name="tea_city" value="{{$teacher->tea_city}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Género:</label>
                            <select name="tea_gender" class="form-control" id="tea_gender">
                                @if(($teacher->tea_gender) == "Masculino")
                                    <option value="Masculino" selected>Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                @else
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino" selected>Femenino</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="tea_phone">Teléfono:</label>
                            <input type="text" name="tea_phone" value="{{$teacher->tea_phone}}" class="form-control">
                        </div>

                        

                        <div class="form-group col-sm-6">
                            <label for="tea_photo">Foto:</label>
                            <input type="file" name="tea_photo" class="form-control">
                            @if(($teacher->tea_photo) != "")
                                <img src="{{asset('/images/teachers/'.$teacher->tea_photo)}}" alt="Foto" 
                                height="200px" width="200px" class="img-thumbnail">
                            @endif
                        </div>
                        

                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{!! route('teachers.index') !!}" class="btn btn-default">Cancelar</a>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        