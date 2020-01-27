<div class="col-sm-6">
    <label for="adm_name">Nombres:</label>
    <p>{{$administrative->adm_name}}</p>
</div>

<div class="col-sm-6">
    <label for="adm_lastName">Apellidos:</label>
    <p>{{$administrative->adm_lastName}}</p>
</div>

<div class="col-sm-6">
    <label for="adm_idCard">Cédula:</label>
    <p>{{$administrative->adm_idCard}}</p>
</div>

<div class="col-sm-6">
    <label for="birthDate">Fecha de Nacimiento:</label>
    <p>{{$administrative->adm_birthDate}}</p>
</div>

<div class="col-sm-6">
    <label for="address">Dirección:</label>
    <p>{{$administrative->adm_address}}</p>
</div>

<div class="col-sm-6">
    <label for="city">Ciudad:</label>
    <p>{{$administrative->adm_city}}</p>
</div>

<div class="col-sm-6">
    <label for="adm_gender">Género:</label>
    @if(($administrative->adm_gender) == "Masculino")
        <p>Masculino</p>
    @else
        <p>Femenino</p>
    @endif
</div>

<div class="col-sm-6">
    <label for="adm_phone">Teléfono:</label>
    <p>{{$administrative->adm_phone}}</p>
</div>

<div class="col-sm-6">
    <label for="">Rol:</label>
    @foreach($roles as $rol) 
        @if($rol->rol_id == $administrative->rol_id)
            <p>{{$rol->rol_name}}</p>
        @endif    
    @endforeach
</div>


<div class="col-sm-6">
    <label for="email">Email:</label>
    <p>{{$administrative->email}}</p>
</div>

<div class="col-sm-6">
    <label for="adm_status">Estado:</label>
    @if($administrative->adm_status == 1)
        <p>Activo</p> 
    @else
        <p>Inactivo</p> 
    @endif
</div>