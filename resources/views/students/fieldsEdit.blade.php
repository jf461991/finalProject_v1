<div class="form-group col-sm-6">
    <label for="stu_name">Nombres:</label>
    <input type="text" name="stu_name" value="{{$student->stu_name}}" class="form-control">
    
</div>

<div class="form-group col-sm-6">
    <label for="stu_lastName">Apellidos:</label>
    <input type="text" name="stu_lastName" value="{{$student->stu_lastName}}" class="form-control">
    
</div>

<div class="form-group col-sm-6">
    <label for="stu_idCard">Cédula:</label>
    <input type="text" name="stu_idCard" value="{{$student->stu_idCard}}" class="form-control" maxlength="10">
    
</div>

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
    <label for="stu_gender">Género:</label>
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
    <label for="stu_lastLevelPass">Último nivel aprobado:</label>
    <input type="text" name="stu_lastLevelPass" value="{{$student->stu_lastLevelPass}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="rol_id">Rol:</label>
    <select name="rol_id" class="form-control" id="rol_id">
        @foreach($roles as $rol) 
            @if($rol->rol_id == $student->rol_id)
                <option value="{{$rol->rol_id}}" selected>{{$rol->rol_name}}</option>
            @else
                <option value="{{$rol->rol_id}}">{{$rol->rol_name}}</option>
            @endif 
        @endforeach
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="stu_email">Email:</label>
    <input type="text" name="stu_email" value="{{$student->stu_email}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="stu_password">Contraseña:</label>
    <input type="password" name="stu_password" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="repeat_passwword">Repita contraseña:</label>
    <input type="password" name="password_confirmation" class="form-control">
    
</div>

<p class="form-group col-sm-5">
    <label for="stu_photo">Foto:</label>
    <input type="file" name="stu_photo" value="{{$student->stu_photo}}" class="form-control"> 
    @if(($student->stu_photo) != "")
        <p class="form-group col-sm-1">
            <img src="{{asset('/images/students/'.$student->stu_photo)}}" 
            alt="Foto" height="80px" width="80px" class="img-thumbnail">
        </p>
    @endif
</p>

<div class="form-group col-sm-12">
    {!! Form::label('stu_status', 'Activar:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('stu_status', 0) !!} 
        {!! Form::checkbox('stu_status', '1', null) !!}
    </label>
</div>