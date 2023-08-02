@php($user = Auth::user())
<ul id="sidebarnav">
    <li class="user-pro">
        <a class="waves-effect waves-dark" href="{{ route('user.profile.edit') }}" aria-expanded="false">
            <img src="{{ asset(Auth::user()->image) }}" alt="user-img" class="img-circle">
            <span class="hide-menu">{{ Auth::user()->name }}</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false">
            <i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span>
        </a>
    </li>
    @if(auth()->user()->type == 'Main')
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
    @endif
    <li>
        <a class="waves-effect waves-dark" href="{{ route('sliders.index') }}" aria-expanded="false">
            <i class="ti-layout-media-right-alt"></i><span class="hide-menu">Slider</span>
        </a>
    </li>
    <li> 
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="icons-Bulleted-List"></i><span class="hide-menu">Menu</span>
        </a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="{{ route('menus.header.index')}}">Header</a></li>
            <li><a href="{{ route('menus.footer.index')}}">Footer</a></li>
        </ul>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('pages.index') }}" aria-expanded="false">
            <i class="icons-Books"></i><span class="hide-menu">Pages</span>
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
    <li>
        <a class="waves-effect waves-dark" href="{{ route('testimonials.index') }}" aria-expanded="false">
            <i class="icons-Testimonal"></i><span class="hide-menu">Testimonial</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('categories.index') }}" aria-expanded="false">
            <i class="icons-Control"></i><span class="hide-menu">Category</span>
        </a>
    </li>
    <li>
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="icons-Bulleted-List"></i><span class="hide-menu">Gallery</span>
        </a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="{{ route('gallery.image.index')}}">Image</a></li>
            <li><a href="{{ route('gallery.video.index')}}">Video</a></li>
        </ul>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('contacts.index') }}" aria-expanded="false">
            <i class="icons-Envelope"></i><span class="hide-menu">Contacts</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('settings.index') }}" aria-expanded="false">
            <i class="ti-settings"></i><span class="hide-menu">Settings</span>
        </a>
    </li>
    @if(auth()->user()->type == 'Main')
    <li>
        <a class="waves-effect waves-dark" href="{{ route('audit.index') }}" aria-expanded="false">
            <i class="icons-Time-Backup"></i><span class="hide-menu">Audits</span>
        </a>
    </li>
    <li>
        <a class="waves-effect waves-dark" href="{{ route('logs') }}" aria-expanded="false" target="_blank">
            <i class="icons-Calendar-4"></i><span class="hide-menu">Logs</span>
        </a>
    </li>
    @endif
</ul>
