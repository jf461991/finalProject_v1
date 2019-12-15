@extends('layouts.app')


@section('content')
<section class="content-header">
        <h1>
            Nuevo Usuario
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    
                    {!! Form::open(['route' => 'users.store']) !!}

                        <div class="form-group col-sm-6">
                            <label for="name">Nombres:</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Apellidos:</label>
                            <input type="text" name="lastName" value="{{old('lastName')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Cédula:</label>
                            <input type="text" name="idCard" value="{{old('idCard')}}" class="form-control" maxlength="10">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Rol:</label>
                            <select name="rol_id" class="form-control" id="rol_id">
                                <option value="">Seleccione un rol</option>
                                @foreach($roles as $rol)
                                    <option value="{{$rol->rol_id}}">{{$rol->rol_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Email:</label>
                            <input type="text" name="email" value="{{old('email')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Contraseña:</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                                        
                        <div class="form-group col-sm-6">
                            <label for="rol_name">Repita contraseña:</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>

                        <!-- <div class="form-group col-sm-6">
                            <label for="photo">Foto:</label>
                            <input type="file" name="photo" class="form-control">
                        </div> -->

            
                        <div class="form-group col-sm-12">
                        {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                        <a href="{!! route('users.index') !!}" class="btn btn-warning">Cancelar</a>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
                
          
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection

                              

