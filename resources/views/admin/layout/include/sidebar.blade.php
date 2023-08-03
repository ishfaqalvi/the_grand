@php($url = url()->full())
<ul id="sidebarnav">
    <li class="user-pro">
        <a class="waves-effect waves-dark" href="{{ route('user.profile.edit') }}" aria-expanded="false">
            <img src="{{ asset(Auth::user()->image) }}" alt="user-img" class="img-circle">
            <span class="hide-menu">{{ Auth::user()->name }}</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/dashboard')) active @endif">
        <a class="waves-effect waves-dark @if (str_contains($url, '/dashboard')) active @endif" href="{{ route('dashboard') }}" aria-expanded="false">
            <i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/settings')) active @endif">
        <a class="waves-effect waves-dark" href="{{ route('settings.index') }}" aria-expanded="false">
            <i class="ti-settings"></i><span class="hide-menu">Settings</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/pages')) active @endif">
        <a class="waves-effect waves-dark" href="{{ route('pages.index') }}" aria-expanded="false">
            <i class="icons-Books"></i><span class="hide-menu">Pages</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/services')) active @endif">
        <a class="waves-effect waves-dark" href="{{ route('services.index') }}" aria-expanded="false">
            <i class="icons-Wrench"></i><span class="hide-menu">Services</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/facilities')) active @endif">
        <a class="waves-effect waves-dark" href="{{ route('facilities.index') }}" aria-expanded="false">
            <i class="icons-Building"></i><span class="hide-menu">Facilities</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/news')) active @endif">
        <a class="waves-effect waves-dark" href="{{ route('news.index') }}" aria-expanded="false">
            <i class="icons-Newspaper"></i><span class="hide-menu">News</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/testimonials')) active @endif">
        <a class="waves-effect waves-dark" href="{{ route('testimonials.index') }}" aria-expanded="false">
            <i class="icons-Testimonal"></i><span class="hide-menu">Testimonial</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/categories')) active @endif">
        <a class="waves-effect waves-dark" href="{{ route('categories.index') }}" aria-expanded="false">
            <i class="icons-Control"></i><span class="hide-menu">Category</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/contacts')) active @endif">
        <a class="waves-effect waves-dark" href="{{ route('contacts.index') }}" aria-expanded="false">
            <i class="icons-Envelope"></i><span class="hide-menu">Contacts</span>
        </a>
    </li>
    <li class="@if (str_contains($url, '/sliders')) active @endif">
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="ti-layout-media-right-alt"></i><span class="hide-menu">Slider</span>
        </a>
        <ul aria-expanded="false" class="collapse @if (str_contains($url, '/sliders')) in @endif">
            <li class="@if (str_contains($url, '/sliders/image')) active @endif">
                <a class="@if (str_contains($url, '/sliders/image')) active @endif" href="{{ route('sliders.image.index')}}">Image</a>
            </li>
            <li class="@if (str_contains($url, '/sliders/video')) active @endif">
                <a class="@if (str_contains($url, '/sliders/video')) active @endif" href="{{ route('sliders.video.index')}}">Video</a>
            </li>
        </ul>
    </li>
    <li class="@if (str_contains($url, '/menus')) active @endif"> 
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="icons-Bulleted-List"></i><span class="hide-menu">Menu</span>
        </a>
        <ul aria-expanded="false" class="collapse @if (str_contains($url, '/menus')) in @endif">
            <li class="@if (str_contains($url, '/menus/header')) active @endif">
                <a class="@if (str_contains($url, '/menus/header')) active @endif" href="{{ route('menus.header.index')}}">Header</a>
            </li>
            <li class="@if (str_contains($url, '/menus/footer')) active @endif">
                <a class="@if (str_contains($url, '/menus/footer')) active @endif" href="{{ route('menus.footer.index')}}">Footer</a>
            </li>
        </ul>
    </li>
    <li class="@if (str_contains($url, '/gallery')) active @endif">
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="icons-Bulleted-List"></i><span class="hide-menu">Gallery</span>
        </a>
        <ul aria-expanded="false" class="collapse @if (str_contains($url, '/gallery')) in @endif">
            <li class="@if (str_contains($url, '/gallery/image')) active @endif">
                <a class="@if (str_contains($url, '/gallery/image')) active @endif" href="{{ route('gallery.image.index')}}">Image</a>
            </li>
            <li class="@if (str_contains($url, '/gallery/video')) active @endif">
                <a class="@if (str_contains($url, '/gallery/video')) active @endif" href="{{ route('gallery.video.index')}}">Video</a>
            </li>
        </ul>
    </li>
    @if(auth()->user()->type == 'Main')
    <li class="@if (str_contains($url, '/domains')) active @endif">
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="ti-layout-grid2"></i><span class="hide-menu">Domains</span>
        </a>
        <ul aria-expanded="false" class="collapse @if (str_contains($url, '/domains')) in @endif">
            <li class="@if (str_contains($url, '/domains/branches')) active @endif">
                <a class="@if (str_contains($url, '/domains/branches')) active @endif" href="{{ route('branches.index') }}">Branches</a>
            </li>
            <li class="@if (str_contains($url, '/domains/users')) active @endif">
                <a class="@if (str_contains($url, '/domains/users')) active @endif" href="{{ route('users.index')}}">Users</a>
            </li>
        </ul>
    </li>
    <li class="@if (str_contains($url, '/logging')) active @endif">
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="icons-Calendar-4"></i><span class="hide-menu">Logging</span>
        </a>
        <ul aria-expanded="false" class="collapse @if (str_contains($url, '/logging')) in @endif">
            <li class="@if (str_contains($url, '/logging/audit')) active @endif">
                <a class="@if (str_contains($url, '/logging/audit')) active @endif" href="{{ route('audit.index') }}">Audits</a>
            </li>
            <li class="@if (str_contains($url, '/logging/logs')) active @endif">
                <a  class="@if (str_contains($url, '/logging/logs')) active @endif" href="{{ route('logs') }}">Logs</a>
            </li>
        </ul>
    </li>
    @endif
</ul>
