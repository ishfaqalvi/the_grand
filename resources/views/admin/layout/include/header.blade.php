<div class="navbar-header">
    <a target="_blank" class="navbar-brand" href="{{ route('home') }}">
        <span>
            <img src="{{ asset('admin/images/main.png') }}" alt="homepage" class="light-logo" height="65px" />
        </span>
    </a>
</div>
<div class="navbar-collapse">
    <ul class="navbar-nav me-auto">
        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
    </ul>
    <ul class="navbar-nav my-lg-0">
        <li class="nav-item dropdown u-pro">
            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset(Auth::user()->image) }}" alt="user" class=""> 
                <span class="hidden-md-down">{{ Auth::user()->name }} &nbsp;<i class="fa fa-angle-down"></i></span> 
            </a>
            <div class="dropdown-menu dropdown-menu-end animated flipInY">
                <a href="{{ route('user.profile.edit') }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        <li class="nav-item right-side-toggle">
            <a class="nav-link  waves-effect waves-light" href="javascript:void(0)">
                <i class="ti-settings"></i>
            </a>
        </li>
    </ul>
</div>