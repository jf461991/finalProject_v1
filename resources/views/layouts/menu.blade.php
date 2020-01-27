    <li class="header">ADMINISTRADOR</li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i>
                <span>Personal</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('administratives') ? 'active' : '' }}">
                    <a href="{{ route('administratives.index') }}"><i class="fa fa-user-circle"></i><span>Nuevo Administrativo</span></a>
                </li>

                <li class="{{ Request::is('teachers') ? 'active' : '' }}">
                    <a href="{{ route('teachers.index') }}"><i class="fa fa-user-circle"></i><span>Nuevo Docente</span></a>
                </li>
            </ul>
        </li>
    </li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Períodos Académicos</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('periods') ? 'active' : '' }}">
                    <a href="{{ route('periods.index') }}"><i class="fa fa-edit"></i><span>Nuevo Período</span></a>
                </li>
            </ul>
        </li>
    </li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-sliders"></i>
                <span>Grados</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('levels') ? 'active' : '' }}">
                    <a href="{{ route('levels.index') }}"><i class="fa fa-edit"></i><span>Nuevo Grado</span></a>
                </li>
            </ul>
        </li>
    </li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-book"></i>
                <span>Materias</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('subjects') ? 'active' : '' }}">
                    <a href="{{ route('subjects.index') }}"><i class="fa fa-edit"></i><span>Nueva Materia</span></a>
                </li>

                <li class="{{ Request::is('levels_subjects') ? 'active' : '' }}">
                    <a href="{{ route('levels_subjects.index') }}"><i class="fa fa-edit"></i><span>Asignar Materias a Grados</span></a>
                </li>
            </ul>
        </li>
    </li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-user"></i>
                <span>Roles</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('roles') ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Nuevo Rol</span></a>
                </li>
            </ul>
        </li>
    </li>

    <li class="header">SECRETARIA</li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-graduation-cap"></i>
                <span>Estudiantes</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('students') ? 'active' : '' }}">
                    <a href="{{ route('students.index') }}"><i class="fa fa-file-text-o"></i><span>Nuevo Estudiante</span></a>
                </li>
            </ul>
        </li>
    </li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-list"></i>
                <span>Asignaciones</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('levels_teachers') ? 'active' : '' }}">
                    <a href="{{ route('levels_teachers.index') }}"><i class="fa fa-file-text-o"></i><span>Docentes-Grados</span></a>
                </li>

                <li class="{{ Request::is('subjects_teachers') ? 'active' : '' }}">
                    <a href="{{ route('subjects_teachers.index') }}"><i class="fa fa-file-text-o"></i><span>Docentes-Materias</span></a>
                </li>
            </ul>
        </li>
    </li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-id-card-o"></i>
                <span>Matrículas</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="{{ Request::is('enrolments') ? 'active' : '' }}">
                        <a href="{!! route('enrolments.index') !!}"><i class="fa fa-male"></i><span>Registrar Matrícula</span></a>
                </li>

                <li class="{{ Request::is('teachers') ? 'active' : '' }}">
                    <a href="{!! route('teachers.index') !!}"><i class="fa fa-male"></i><span>Estudiantes Antiguos</span></a>
                </li>
            </ul>
        </li>
    </li>

    <li class="header">DOCENTE</li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-file-text"></i>
                <span>Notas</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="{{ Request::is('enrolments') ? 'active' : '' }}">
                        <a href="{!! route('enrolments.index') !!}"><i class="fa fa-edit"></i><span>Registrar Notas</span></a>
                </li>
            </ul>
        </li>
    </li>

    <li class="header">ESTUDIANTE</li>

    <li class="treeview">
            <a href="#">
                <i class="fa fa-address-book"></i>
                <span>Calificaciones</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="{{ Request::is('enrolments') ? 'active' : '' }}">
                        <a href="{!! route('enrolments.index') !!}"><i class="fa fa-eye"></i><span>Visualizar Notas</span></a>
                </li>
                <li class="{{ Request::is('enrolments') ? 'active' : '' }}">
                        <a href="{!! route('enrolments.index') !!}"><i class="fa fa-print"></i><span>Imprimir Notas</span></a>
                </li>
            </ul>
        </li>
    </li>


    
 


