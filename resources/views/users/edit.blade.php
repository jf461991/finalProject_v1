@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualización de Usuario
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

                        <div class="form-group col-sm-6">
                            <label for="user_name">Nombres:</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="user_lastName">Apellidos:</label>
                            <input type="text" name="lastName" value="{{$user->lastName}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="user_idCard">Cédula:</label>
                            <input type="text" name="idCard" value="{{$user->idCard}}" class="form-control" maxlength="10">
                        </div>


                        <div class="form-group col-sm-6">
                            <label for="">Rol:</label>
                            <select name="rol_id" class="form-control" id="rol_id">
                                @foreach($roles as $rol)
                                    @if($rol->rol_id == $user->rol_id)
                                        <option value="{{$rol->rol_id}}" selected>{{$rol->rol_name}}</option>
                                    @else
                                        <option value="{{$rol->rol_id}}">{{$rol->rol_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="user_email">Email:</label>
                            <input type="text" name="email" value="{{$user->email}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="user_password">Contraseña:</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                                        
                        <div class="form-group col-sm-6">
                            <label for="repeat_passwword">Repita contraseña:</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        

                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{!! route('users.index') !!}" class="btn btn-default">Cancelar</a>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        