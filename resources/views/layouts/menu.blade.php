<li class="{{ Request::is('periods') ? 'active' : '' }}">
    <a href="{{ route('periods.index') }}"><i class="fa fa-edit"></i><span>Periods</span></a>
</li>

<li class="{{ Request::is('levels') ? 'active' : '' }}">
    <a href="{{ route('levels.index') }}"><i class="fa fa-edit"></i><span>Cursos-Paralelos</span></a>
</li>

<li class="{{ Request::is('subjects') ? 'active' : '' }}">
    <a href="{{ route('subjects.index') }}"><i class="fa fa-edit"></i><span>Asignaturas</span></a>
</li>

<li class="{{ Request::is('roles') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('users') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>

<li class="{{ Request::is('students') ? 'active' : '' }}">
    <a href="{{ route('students.index') }}"><i class="fa fa-edit"></i><span>Estudiantes</span></a>
</li>

<li class="{{ Request::is('teachers') ? 'active' : '' }}">
    <a href="{{ route('teachers.index') }}"><i class="fa fa-edit"></i><span>Docentes</span></a>
</li>

<li class="{{ Request::is('administratives') ? 'active' : '' }}">
    <a href="{{ route('administratives.index') }}"><i class="fa fa-edit"></i><span>Administrativos</span></a>
</li>

<li class="{{ Request::is('levels_subjects') ? 'active' : '' }}">
    <a href="{{ route('levels_subjects.index') }}"><i class="fa fa-edit"></i><span>Asignaturas-Paralelos</span></a>
</li>



<li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>MATRÍCULAS</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('enrolments') ? 'active' : '' }}">
                    <a href="{!! route('enrolments.index') !!}"><i class="fa fa-user-circle"></i><span>Estudiantes Nuevos</span></a>
            </li>

            <li class="{{ Request::is('teachers') ? 'active' : '' }}">
                <a href="{!! route('teachers.index') !!}"><i class="fa fa-user-circle"></i><span>Estudiantes Antiguos</span></a>
            </li>
        </ul>
    </li>
</li>    


