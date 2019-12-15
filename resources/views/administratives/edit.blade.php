@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualización de Personal Administrativo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($administrative, ['route' => ['administratives.update', $administrative->adm_id], 'method' => 'patch', 'files' => true]) !!}

                        <div class="form-group col-sm-6">
                            <label for="name">Nombres:</label>
                            <input type="text" name="adm_name" value="{{$administrative->adm_name}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Apellidos:</label>
                            <input type="text" name="adm_lastName" value="{{$administrative->adm_lastName}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Cédula:</label>
                            <input type="text" name="adm_idCard" value="{{$administrative->adm_idCard}}" class="form-control" maxlength="10">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="adm_email">Email:</label>
                            <input type="text" name="adm_email" value="{{$administrative->adm_email}}" class="form-control">
                        </div>
                        
                        <!-- <div class="form-group col-sm-6">
                            <label for="name">Nombres:</label>
                            <input type="text" name="adm_name" disabled id="adm_name" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Apellidos:</label>
                            <input type="text" name="adm_lastName" disabled id="adm_lastName" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Cédula:</label>
                            <input type="text" name="adm_idCard" disabled id="adm_idCard" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="adm_email">Email:</label>
                            <input type="text" name="adm_email" disabled id="adm_email" class="form-control">
                        </div> -->

                        <div class="form-group col-sm-6">
                            <label for="adm_birthDate">Fecha de Nacimiento:</label>
                            <input type="date" name="adm_birthDate" value="{{$administrative->adm_birthDate}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="adm_address">Dirección:</label>
                            <input type="text" name="adm_address" value="{{$administrative->adm_address}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="adm_city">Ciudad:</label>
                            <input type="text" name="adm_city" value="{{$administrative->adm_city}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Género:</label>
                            <select name="adm_gender" class="form-control" id="adm_gender">
                                @if(($administrative->adm_gender) == "Masculino")
                                    <option value="Masculino" selected>Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                @else
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino" selected>Femenino</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="adm_phone">Teléfono:</label>
                            <input type="text" name="adm_phone" value="{{$administrative->adm_phone}}" class="form-control">
                        </div>

                        

                        <div class="form-group col-sm-6">
                            <label for="adm_photo">Foto:</label>
                            <input type="file" name="adm_photo" class="form-control">
                            @if(($administrative->adm_photo) != "")
                                <img src="{{asset('/images/administratives/'.$administrative->adm_photo)}}" alt="Foto" 
                                height="200px" width="200px" class="img-thumbnail">
                            @endif
                        </div>
                        

                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{!! route('administratives.index') !!}" class="btn btn-default">Cancelar</a>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        