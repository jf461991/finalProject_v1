<div class="form-group col-sm-6">
    <label for="adm_name">Nombres:</label>
    <input type="text" name="adm_name" value="{{$administrative->adm_name}}" class="form-control">
    
</div>

<div class="form-group col-sm-6">
    <label for="adm_lastName">Apellidos:</label>
    <input type="text" name="adm_lastName" value="{{$administrative->adm_lastName}}" class="form-control">
    
</div>

<div class="form-group col-sm-6">
    <label for="adm_idCard">Cédula:</label>
    <input type="text" name="adm_idCard" value="{{$administrative->adm_idCard}}" class="form-control" maxlength="10">
    
</div>

<div class="form-group col-sm-6">
    <label for="adm_birthDate">Fecha de Nacimiento:</label>
    <input type="date" name="adm_birthDate" value="{{$administrative->adm_birthDate}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="adm_address">Dirección:</label>
    <input type="text" name="adm_address" value="{{$administrative->adm_address}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="adm_city">Ciudad:</label>
    <input type="text" name="adm_city" value="{{$administrative->adm_city}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="adm_gender">Género:</label>
    <select name="adm_gender" class="form-control" id="adm_gender">
        @if(($administrative->adm_gender) == "Masculino")
            <option value="Masculino" selected>Masculino</option>
            <option value="Femenino">Femenino</option>
        @else
            <option value="Masculino">Masculino</option>
            <option value="Femenino" selected>Femenino</option>
        @endif
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="adm_phone">Teléfono:</label>
    <input type="text" name="adm_phone" value="{{$administrative->adm_phone}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="rol_id">Rol:</label>
    <select name="rol_id" class="form-control" id="rol_id">
        @foreach($roles as $rol) 
            @if($rol->rol_id == $administrative->rol_id)
                <option value="{{$rol->rol_id}}" selected>{{$rol->rol_name}}</option>
            @else
                <option value="{{$rol->rol_id}}">{{$rol->rol_name}}</option>
            @endif 
        @endforeach
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="email">Email:</label>
    <input type="text" name="email" value="{{$administrative->email}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="password">Contraseña:</label>
    <input type="password" name="password" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="repeat_passwword">Repita contraseña:</label>
    <input type="password" name="password_confirmation" class="form-control">
    
</div>

<p class="form-group col-sm-5">
    <label for="adm_photo">Foto:</label>
    <input type="file" name="adm_photo" value="{{$administrative->adm_photo}}" class="form-control"> 
    @if(($administrative->adm_photo) != "")
        <p class="form-group col-sm-1">
            <img src="{{asset('/images/administratives/'.$administrative->adm_photo)}}" 
            alt="Foto" height="80px" width="80px" class="img-thumbnail">
        </p>
    @endif
</p>

<div class="form-group col-sm-6">
    {!! Form::label('adm_status', 'Activar:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('adm_status', 0) !!} 
        {!! Form::checkbox('adm_status', '1', null) !!}
    </label>
</div>