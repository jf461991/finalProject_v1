<div class="form-group col-sm-6">
    <label for="name">Nombres:</label>
    <input type="text" name="stu_name" value="{{old('stu_name')}}" id="stu_name" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="rol_name">Apellidos:</label>
    <input type="text" name="stu_lastName" value="{{old('stu_lastName')}}" id="stu_lastName" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="rol_name">Cédula:</label>
    <input type="text" name="stu_idCard" value="{{old('stu_idCard')}}" id="stu_idCard" class="form-control" maxlength="10">
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
    <label for="stu_lastLevelPass">Último nivel aprobado:</label>
    <select name="stu_lastLevelPass" class="form-control" id="stu_lastLevelPass">
        <option value="">...</option>
        <option value="7">Séptimo Año</option>
        <option value="8">Octavo Año</option>
        <option value="9">Noveno Año</option>
        <option value="10">Décimo Año</option>
        <option value="11">Primero Bachillerato</option>
        <option value="12">Segundo Bachillerato</option>
    </select>
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
    <label for="stu_email">Email:</label>
    <input type="text" name="stu_email" value="{{old('stu_email')}}" id="stu_email" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="stu_password">Contraseña:</label>
    <input type="password" name="stu_password" id="stu_password" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="password_confirmation">Repita contraseña:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="stu_photo">Foto:</label>
    <input type="file" name="stu_photo" class="form-control">
</div>

<!-- <div class="col-sm-6">
    {!! Form::label('stu_status', 'Activar?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('stu_status', 0) !!}
        {!! Form::checkbox('stu_status', '1', null) !!}
    </label>
</div> -->