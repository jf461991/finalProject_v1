<div class="col-sm-6">
    <label for="stu_name">Nombres:</label>
    <p>{{$student->stu_name}}</p>
</div>

<div class="col-sm-6">
    <label for="stu_lastName">Apellidos:</label>
    <p>{{$student->stu_lastName}}</p>
</div>

<div class="col-sm-6">
    <label for="stu_idCard">Cédula:</label>
    <p>{{$student->stu_idCard}}</p>
</div>

<div class="col-sm-6">
    <label for="birthDate">Fecha de Nacimiento:</label>
    <p>{{$student->stu_birthDate}}</p>
</div>

<div class="col-sm-6">
    <label for="address">Dirección:</label>
    <p>{{$student->stu_address}}</p>
</div>

<div class="col-sm-6">
    <label for="city">Ciudad:</label>
    <p>{{$student->stu_city}}</p>
</div>

<div class="col-sm-6">
    <label for="stu_gender">Género:</label>
    @if(($student->stu_gender) == "Masculino")
        <p>Masculino</p>
    @else
        <p>Femenino</p>
    @endif
</div>

<div class="col-sm-6">
    <label for="stu_phone">Teléfono:</label>
    <p>{{$student->stu_phone}}</p>
</div>


    
<div class="col-sm-6">
    <label for="stu_lastLevelPass">Último nivel aprobado:</label>
    <p>{{$student->stu_lastLevelPass}}</p>
</div>
    


<div class="col-sm-6">
    <label for="">Rol:</label>
    @foreach($roles as $rol) 
        @if($rol->rol_id == $student->rol_id)
            <p>{{$rol->rol_name}}</p>
        @endif    
    @endforeach
</div>



<div class="col-sm-6">
    <label for="stu_email">Email:</label>
    <p>{{$student->stu_email}}</p>
</div>

<div class="col-sm-6">
    <label for="stu_status">Estado:</label>
    @if($student->stu_status == 1)
        <p>Activo</p> 
    @else
        <p>Inactivo</p> 
    @endif
</div>