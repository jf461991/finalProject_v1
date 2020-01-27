<div class="col-sm-6">
    <label for="tea_name">Nombres:</label>
    <p>{{$teacher->tea_name}}</p>
</div>

<div class="col-sm-6">
    <label for="tea_lastName">Apellidos:</label>
    <p>{{$teacher->tea_lastName}}</p>
</div>

<div class="col-sm-6">
    <label for="tea_idCard">Cédula:</label>
    <p>{{$teacher->tea_idCard}}</p>
</div>

<div class="col-sm-6">
    <label for="birthDate">Fecha de Nacimiento:</label>
    <p>{{$teacher->tea_birthDate}}</p>
</div>

<div class="col-sm-6">
    <label for="address">Dirección:</label>
    <p>{{$teacher->tea_address}}</p>
</div>

<div class="col-sm-6">
    <label for="city">Ciudad:</label>
    <p>{{$teacher->tea_city}}</p>
</div>

<div class="col-sm-6">
    <label for="tea_gender">Género:</label>
    @if(($teacher->tea_gender) == "Masculino")
        <p>Masculino</p>
    @else
        <p>Femenino</p>
    @endif
</div>

<div class="col-sm-6">
    <label for="tea_phone">Teléfono:</label>
    <p>{{$teacher->tea_phone}}</p>
</div>

<div class="col-sm-6">
    <label for="">Rol:</label>
    @foreach($roles as $rol) 
        @if($rol->rol_id == $teacher->rol_id)
            <p>{{$rol->rol_name}}</p>
        @endif    
    @endforeach
</div>


<div class="col-sm-6">
    <label for="tea_email">Email:</label>
    <p>{{$teacher->tea_email}}</p>
</div>

<div class="col-sm-6">
    <label for="tea_status">Estado:</label>
    @if($teacher->tea_status == 1)
        <p>Activo</p> 
    @else
        <p>Inactivo</p> 
    @endif
</div>