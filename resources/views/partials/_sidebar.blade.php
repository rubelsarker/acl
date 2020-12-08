<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="{{url('')}}/logo.png" width="60" alt="atmos Logo">
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
            <!--start dashboard-->
            <li class="menu-item {{request()->routeIs('dashboard') ? 'active' : ''}}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <span class="menu-label"><span class="menu-name">Dashboard</span></span>
                    <span class="menu-icon"><i class="icon-placeholder fe fe-activity "></i></span>
                </a>
            </li>
            <!--end dashboard-->
            <!--start user management-->
            @role('Admin')
            <li class="menu-item {{request()->routeIs('users.*')||request()->routeIs('permissions.*')||request()->routeIs('roles.*') ? 'active open' : ''}} ">
                <a href="#" class="open-dropdown menu-link">
                    <span class="menu-label"><span class="menu-name">User Management<span class="menu-arrow"></span></span></span>
                    <span class="menu-icon"><i class="icon-placeholder fe fe-users "></i></span>
                </a>
                <!--start submenu-->
                <ul class="sub-menu" style="display:{{request()->routeIs('users.*')||request()->routeIs('roles.*') || request()->routeIs('permissions.*')  ? 'block' : 'none'}} ">
                    <li class="menu-item  {{request()->routeIs('roles.*') ? 'active' : ''}}">
                        <a href="{{route('roles.index')}}" class=" menu-link">
                            <span class="menu-label"><span class="menu-name">Manage Role</span></span>
                            <span class="menu-icon"><i class="icon-placeholder mdi mdi-checkbook "></i></span>
                        </a>
                    </li>
                    <li class="menu-item {{request()->routeIs('users.*') ? 'active' : ''}}">
                        <a href="{{route('users.index')}}" class=" menu-link">
                            <span class="menu-label"><span class="menu-name">Manage Users</span></span>
                            <span class="menu-icon"><i class="icon-placeholder mdi mdi-account "></i></span>
                        </a>
                    </li>
                    <li class="menu-item {{request()->routeIs('permissions.*') ? 'active' : ''}}">
                        <a href="{{route('permissions.index')}}" class=" menu-link">
                            <span class="menu-label"><span class="menu-name">Manage Permissions</span></span>
                            <span class="menu-icon"><i class="icon-placeholder mdi mdi-checkbook "></i></span>
                        </a>
                    </li>
                </ul>
                <!--end submenu-->
            </li>
            @endrole
            <!--end user management-->
        </ul>
    </div>

</aside>
