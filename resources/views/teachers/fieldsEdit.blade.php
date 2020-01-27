<div class="form-group col-sm-6">
    <label for="tea_name">Nombres:</label>
    <input type="text" name="tea_name" value="{{$teacher->tea_name}}" class="form-control">
    
</div>

<div class="form-group col-sm-6">
    <label for="tea_lastName">Apellidos:</label>
    <input type="text" name="tea_lastName" value="{{$teacher->tea_lastName}}" class="form-control">
    
</div>

<div class="form-group col-sm-6">
    <label for="tea_idCard">Cédula:</label>
    <input type="text" name="tea_idCard" value="{{$teacher->tea_idCard}}" class="form-control" maxlength="10">
    
</div>

<div class="form-group col-sm-6">
    <label for="tea_birthDate">Fecha de Nacimiento:</label>
    <input type="date" name="tea_birthDate" value="{{$teacher->tea_birthDate}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="tea_address">Dirección:</label>
    <input type="text" name="tea_address" value="{{$teacher->tea_address}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="tea_city">Ciudad:</label>
    <input type="text" name="tea_city" value="{{$teacher->tea_city}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="tea_gender">Género:</label>
    <select name="tea_gender" class="form-control" id="tea_gender">
        @if(($teacher->tea_gender) == "Masculino")
            <option value="Masculino" selected>Masculino</option>
            <option value="Femenino">Femenino</option>
        @else
            <option value="Masculino">Masculino</option>
            <option value="Femenino" selected>Femenino</option>
        @endif
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="tea_phone">Teléfono:</label>
    <input type="text" name="tea_phone" value="{{$teacher->tea_phone}}" class="form-control">
</div>

<div class="form-group col-sm-6">
    <label for="rol_id">Rol:</label>
    <select name="rol_id" class="form-control" id="rol_id">
        @foreach($roles as $rol) 
            @if($rol->rol_id == $teacher->rol_id)
                <option value="{{$rol->rol_id}}" selected>{{$rol->rol_name}}</option>
            @else
                <option value="{{$rol->rol_id}}">{{$rol->rol_name}}</option>
            @endif 
        @endforeach
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="tea_email">Email:</label>
    <input type="text" name="tea_email" value="{{$teacher->tea_email}}" class="form-control">
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
    <label for="tea_photo">Foto:</label>
    <input type="file" name="tea_photo" value="{{$teacher->tea_photo}}" class="form-control"> 
    @if(($teacher->tea_photo) != "")
        <p class="form-group col-sm-1">
            <img src="{{asset('/images/teachers/'.$teacher->tea_photo)}}" 
            alt="Foto" height="80px" width="80px" class="img-thumbnail">
        </p>
    @endif
</p>

<div class="form-group col-sm-6">
    {!! Form::label('tea_status', 'Activar:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('tea_status', 0) !!} 
        {!! Form::checkbox('tea_status', '1', null) !!}
    </label>
</div>