<li class="{{ Request::is('home*') ? 'active' : '' }} ">
    <a href="{{ route('home') }}">
        <i class="tim-icons icon-chart-pie-36"></i>
        <p>Dashboard</p>
    </a>
</li>



<li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
        <i class="tim-icons icon-settings-gear-63"></i>
        <p> Settings
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse" id="tablesExamples">
        <ul class="nav">
            @can('roles.index')
                <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                    <a href="{!! route('roles.index') !!}">
                        <i class="tim-icons icon-key-25"></i>
                        <p>Roles</p>
                    </a>
                </li>
            @endcan
            @can('users.index')
                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{!! route('users.index') !!}">
                        <i class="tim-icons icon-single-02"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
            @endcan
            @can('permissions.index')
                <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
                    <a  href="{!! route('permissions.index') !!}">
                        <i class="tim-icons icon-lock-circle"></i>
                        <p>Permisos</p>
                    </a>
                </li>
            @endcan
        </ul>
    </div>
</li>
