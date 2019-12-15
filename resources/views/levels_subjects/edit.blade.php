@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualización de Asignación
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model($levelsubject, ['route' => ['levels_subjects.update', $levelsubject->lesute_id], 'method' => 'patch']) !!}


                    <div class="form-group col-sm-6">
                        <label for="">Docente:</label>
                        <select name="tea_id" class="form-control" id="tea_id">
                            @foreach($teachers as $tea)
                                @if($tea->tea_id == $levelsubject->tea_id)
                                    <option value="{{$tea->tea_id}}" selected>{{$tea->tea_name}} {{$tea->tea_lastName}}</option>
                                @else
                                    <option value="{{$tea->tea_id}}">{{$tea->tea_name}} {{$tea->tea_lastName}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="">Asignatura:</label>
                        <select name="sub_id" class="form-control" id="sub_id">
                            @foreach($subjects as $sub)
                                @if($sub->sub_id == $levelsubject->sub_id)
                                    <option value="{{$sub->sub_id}}" selected>{{$sub->sub_name}}</option>
                                @else
                                    <option value="{{$sub->sub_id}}">{{$sub->sub_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="">Grado/Paralelo:</label>
                        <select name="lev_id" class="form-control" id="lev_id">
                            @foreach($levels as $lev)
                                @if($lev->lev_id == $levelsubject->lev_id)
                                    <option value="{{$lev->lev_id}}" selected>{{$lev->lev_name}}</option>
                                @else
                                <option value="{{$lev->lev_id}}">{{$lev->lev_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="">Período:</label>
                        <select name="per_id" class="form-control" id="per_id">
                            @foreach($periods as $per)
                                @if($per->per_id == $levelsubject->per_id)
                                    <option value="{{$per->per_id}}" selected>{{$per->per_name}}</option>
                                @else
                                <option value="{{$per->per_id}}">{{$per->per_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="{!! route('levels_subjects.index') !!}" class="btn btn-default">Cancelar</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
                        