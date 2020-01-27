<div class="form-group col-sm-6">
    <label for="name">Nombres:</label>
    <input type="text" name="tea_name" value="{{old('tea_name')}}" id="tea_name" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="rol_name">Apellidos:</label>
    <input type="text" name="tea_lastName" value="{{old('tea_lastName')}}" id="tea_lastName" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="rol_name">Cédula:</label>
    <input type="text" name="tea_idCard" value="{{old('tea_idCard')}}" id="tea_idCard" class="form-control" maxlength="10">
</div>

<div class="form-group col-sm-6">
    <label for="tea_birthDate">Fecha de Nacimiento:</label>
    <input type="date" name="tea_birthDate" value="{{old('tea_birthDate')}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="tea_address">Dirección:</label>
    <input type="text" name="tea_address" value="{{old('tea_address')}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="tea_city">Ciudad:</label>
    <input type="text" name="tea_city" value="{{old('tea_city')}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="">Género:</label>
    <select name="tea_gender" class="form-control" id="tea_gender">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="tea_phone">Teléfono:</label>
    <input type="text" name="tea_phone" value="{{old('tea_phone')}}" class="form-control">
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
    <label for="tea_email">Email:</label>
    <input type="text" name="tea_email" value="{{old('tea_email')}}" id="tea_email" class="form-control">
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
    <label for="tea_photo">Foto:</label>
    <input type="file" name="tea_photo" class="form-control">
</div>

<!-- <div class="col-sm-6">
    {!! Form::label('tea_status', 'Activar?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('tea_status', 0) !!}
        {!! Form::checkbox('tea_status', '1', null) !!}
    </label>
</div> -->