@extends('layouts.app')


@section('content')
<section class="content-header">
        <h1>
            Nuevo Estudiante
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'students.store', 'files' => true]) !!}

                        <div class="form-group col-sm-6">
                            <label for="name">Nombres:</label>                     
                            <input type="text" name="stu_name" value="{{old('stu_name')}}" 
                            id="stu_name" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Apellidos:</label>
                            <input type="text" name="stu_lastName" value="{{old('stu_lastName')}}" 
                            id="stu_lastName" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="rol_name">Cédula:</label>
                            <input type="text" name="stu_idCard" value="{{old('stu_idCard')}}" 
                            id="stu_idCard" class="form-control" maxlenght="10">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_email">Email:</label>
                            <input type="text" name="stu_email" value="{{old('stu_email')}}" 
                            id="stu_email" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_birthDate">Fecha de Nacimiento:</label>
                            <input type="date" name="stu_birthDate" value="{{old('stu_birthDate')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_address">Dirección:</label>
                            <input type="text" name="stu_address" value="{{old('stu_address')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_city">Ciudad:</label>
                            <input type="text" name="stu_city" value="{{old('stu_city')}}" class="form-control">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Género:</label>
                            <select name="stu_gender" class="form-control" id="stu_gender">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="stu_phone">Teléfono:</label>
                            <input type="text" name="stu_phone" value="{{old('stu_phone')}}" class="form-control">
                        </div>

                        

                        <div class="form-group col-sm-6">
                            <label for="stu_photo">Foto:</label>
                            <input type="file" name="stu_photo" class="form-control">
                        </div>

            
                        <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-success">Registrar</button>
                        <a href="{!! route('students.index') !!}" class="btn btn-warning">Cancelar</a>
                        </div>

                    {!! Form::close() !!}
   
                </div>
            </div>
        </div>
    </div>
                   
@endsection

@section('scripts')
    <script type="text/javascript">

        /* $("#id2").change(mostrarCampos);

        function mostrarCampos(){
            datosUsuario=document.getElementById('id2').value.split('-');
            $("#stu_name").val(datosUsuario[1]);
            $("#stu_lastName").val(datosUsuario[2]);
            $("#stu_idCard").val(datosUsuario[3]);
            $("#stu_email").val(datosUsuario[4]);
        } */

        /* function activarInput(){
            $('#stu_name').attr('disabled',false);
            $('#stu_lastName').attr('disabled',false);
            $('#stu_idCard').attr('disabled',false);
            $('#stu_email').attr('disabled',false);
        } */


        /* function eliminaEspacio(){
            $('input').val(function(_, value){
                return $.trim(value);
            });
        } */
    </script>
@endsection





                              

