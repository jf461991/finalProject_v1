@extends('layouts.app')

@section('content')
    <section class="content-header">

    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-responsive img-circle" 
                            src="{{asset('/images/teachers/'.$teacher->tea_photo)}}" 
                            alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{$teacher->tea_name}} {{$teacher->tea_lastName}}</h3>

                        <p>
                            @foreach($roles as $rol) 
                                @if($rol->rol_id == $teacher->rol_id)
                                    <p class="text-center text-danger"><b>{{$rol->rol_name}}</b></p>
                                @endif 
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">Ficha de Información de Estudiante</h4>
                    </div>
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group row">
                                @include('teachers.fieldsShow')
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-sm-12">
                                <a href="{!! route('teachers.index') !!}" class="btn btn-warning">Regresar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection