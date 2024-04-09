        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{ route('home') }}">{{ucwords(Auth::user()->role)}}</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="{{ route('home') }}">ADB</a>
                </div>
                <ul class="sidebar-menu">
                @include('layouts.header')
                    <li class="menu-header">Main</li>
                    <li class="dropdown active">
                        <a href="{{ route('home') }}"><i class="fa-solid fa-tv"></i><span>Dashboard</span></a>
                    </li>
                    <li class="menu-header">Components</li>
                    <li class="dropdown">
                        <a href="{{ route('home') }}" class="nav-link has-dropdown"><i class="fa-solid fa-layer-group"></i> <span>Features</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="/education">Educational</a></li>
                            <li><a class="nav-link" href="/experience">Experiences</a></li>
                            <li><a class="nav-link" href="/skills">Skills</a></li>
                            <li><a class="nav-link" href="/contacts">Contacts</a></li>
                            <li><a class="nav-link" href="/work">Project (works)</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">Sub-Main</li>
                    <li><a class="nav-link" href="{{ route('admin.index') }}"><i class="fa-solid fa-users"></i>User</a></li>
                    @if(Auth::user()->role == 'admin')
                    <li><a class="nav-link" href="#" data-toggle="modal" data-target="#editProfileModal{{Auth::user()->id}}"><i class="fa-solid fa-user"></i><span>Profile</span></a></li>
                    @endif
                </ul>
            </aside>
        </div>
        @include('profile.edit')
    </div>
</div>
