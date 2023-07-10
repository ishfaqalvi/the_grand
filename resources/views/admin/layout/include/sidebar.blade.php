@php($user = Auth::user())
<ul id="sidebarnav">
    <li class="user-pro">
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <img src="{{ asset(Auth::user()->image) }}" alt="user-img" class="img-circle">
            <span class="hide-menu">{{ Auth::user()->name }}</span>
        </a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="{{ route('user.profile.edit') }}"><i class="ti-user"></i> My Profile</a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i> Logout
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false">
            <i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('branches.index') }}" aria-expanded="false">
            <i class="ti-layout-grid2"></i><span class="hide-menu">Branches</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('users.index') }}" aria-expanded="false">
            <i class="icons-Administrator"></i><span class="hide-menu">Users</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('sliders.index') }}" aria-expanded="false">
            <i class="ti-layout-media-right-alt"></i><span class="hide-menu">Slider</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('services.index') }}" aria-expanded="false">
            <i class="icons-Wrench"></i><span class="hide-menu">Services</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('facilities.index') }}" aria-expanded="false">
            <i class="icons-Building"></i><span class="hide-menu">Facilities</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('news.index') }}" aria-expanded="false">
            <i class="icons-Newspaper"></i><span class="hide-menu">News</span>
        </a>
    </li>
    @can('menu-list')
    <li>
        <a class="waves-effect waves-dark" href="{{ route('menus.index') }}" aria-expanded="false">
            <i class="icons-Bulleted-List"></i><span class="hide-menu">Menu</span>
        </a>
    </li>
    @endcan
    @can('strings-list')
    <li>
        <a class="waves-effect waves-dark" href="{{ route('dynamic-strings.index') }}" aria-expanded="false">
            <i class="icons-Fountain-Pen"></i><span class="hide-menu">Strings</span>
        </a>
    </li>
    @endcan
    <li>
        <a class="waves-effect waves-dark" href="{{ route('sliders.index') }}" aria-expanded="false">
            <i class="icons-Fountain-Pen"></i><span class="hide-menu">Slider</span>
        </a>
    </li>
    @if('homePage-list')
    <li> 
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="icons-Books"></i><span class="hide-menu">Pages</span>
        </a>
        <ul aria-expanded="false" class="collapse">
            @can('homePage-list')
            <li><a href="{{ route('pages.home.index')}}">Home</a></li>
            @endcan
            @can('blogPage-list')
            <li><a href="{{ route('pages.blog.index')}}">Blog</a></li>
            @endcan
            @can('categoryPage-list')
            <li><a href="{{ route('pages.category.index')}}">Category</a></li>
            @endcan
            @can('contactUsPage-list')
            <li><a href="{{ route('pages.contact_us.index')}}">Contact Us</a></li>
            @endcan
            @can('simplePage-list')
            <li><a href="{{ route('pages.simple.index')}}">Simple</a></li>
            @endcan
        </ul>
    </li>
    @endif
    @can('comments-list')
    <li>
        <a class="waves-effect waves-dark" href="{{ route('comments.index') }}" aria-expanded="false">
            <i class="fas fa-comments"></i><span class="hide-menu">Comments</span>
        </a>
    </li>
    @endcan
    @can('feedback-list')
    <li>
        <a class="waves-effect waves-dark" href="{{ route('feedbacks.index') }}" aria-expanded="false">
            <i class="icons-Envelope"></i><span class="hide-menu">Feedbacks</span>
        </a>
    </li>
    @endcan
    @can('settings-list')
    <li>
        <a class="waves-effect waves-dark" href="{{ route('settings.index') }}" aria-expanded="false">
            <i class="ti-settings"></i><span class="hide-menu">Settings</span>
        </a>
    </li>
    @endcan
    @can('audit-list')
    <li>
        <a class="waves-effect waves-dark" href="{{ route('audit.index') }}" aria-expanded="false">
            <i class="icons-Time-Backup"></i><span class="hide-menu">Audits</span>
        </a>
    </li>
    @endcan
    @can('log-list') 
    <li>
        <a class="waves-effect waves-dark" href="{{ route('logs') }}" aria-expanded="false" target="_blank">
            <i class="icons-Calendar-4"></i><span class="hide-menu">Logs</span>
        </a>
    </li>
    @endcan
    <li>
        <a class="waves-effect waves-dark" href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span>
        </a>
    </li>
</ul>
        