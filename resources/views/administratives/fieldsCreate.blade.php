<div class="form-group col-sm-6">
    <label for="name">Nombres:</label>
    <input type="text" name="adm_name" value="{{old('adm_name')}}" id="adm_name" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="rol_name">Apellidos:</label>
    <input type="text" name="adm_lastName" value="{{old('adm_lastName')}}" id="adm_lastName" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="rol_name">Cédula:</label>
    <input type="text" name="adm_idCard" value="{{old('adm_idCard')}}" id="adm_idCard" class="form-control" maxlength="10">
</div>

<div class="form-group col-sm-6">
    <label for="adm_birthDate">Fecha de Nacimiento:</label>
    <input type="date" name="adm_birthDate" value="{{old('adm_birthDate')}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="adm_address">Dirección:</label>
    <input type="text" name="adm_address" value="{{old('adm_address')}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="adm_city">Ciudad:</label>
    <input type="text" name="adm_city" value="{{old('adm_city')}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="">Género:</label>
    <select name="adm_gender" class="form-control" id="adm_gender">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="adm_phone">Teléfono:</label>
    <input type="text" name="adm_phone" value="{{old('adm_phone')}}" class="form-control">
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
    <label for="email">Email:</label>
    <input type="text" name="email" value="{{old('email')}}" id="email" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="password_confirmation">Repita contraseña:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="adm_photo">Foto:</label>
    <input type="file" name="adm_photo" class="form-control">
</div>

<!-- <div class="col-sm-6">
    {!! Form::label('adm_status', 'Activar?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('adm_status', 0) !!}
        {!! Form::checkbox('adm_status', '1', null) !!}
    </label>
</div> -->