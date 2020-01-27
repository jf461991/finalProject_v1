@extends('layouts.app')


@section('content')
    <section class="content-header">
        <!-- <h1>
                Actualización de Docente
            </h1> -->
    </section>

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h2 class="box-title">Registro de Nuevo Estudiante</h2>
                    </div>
                    {!! Form::open(['route' => 'students.store', 'files' => true]) !!}
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                @include('students.fieldsCreate')
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="">
                                <button type="submit" class="btn btn-success">Registrar</button>
                                <a href="{!! route('students.index') !!}" class="btn btn-warning">Cancelar</a>
                            </div>
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





                              

