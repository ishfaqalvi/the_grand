<ul class="nav nav-tabs customtab2" role="tablist">
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='navigation' ? 'active' : ''}}" data-bs-toggle="tab" href="#navigation" role="tab">
            <span class="hidden-xs-down">Detail</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='slider' ? 'active' : ''}}" data-bs-toggle="tab" href="#slider" role="tab">
            <span class="hidden-xs-down">Slider</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='about' ? 'active' : ''}}" data-bs-toggle="tab" href="#about" role="tab">
            <span class="hidden-xs-down">About</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='category' ? 'active' : ''}}" data-bs-toggle="tab" href="#category" role="tab">
            <span class="hidden-xs-down">Category</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='service' ? 'active' : ''}}" data-bs-toggle="tab" href="#service" role="tab">
            <span class="hidden-xs-down">Service</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='booking' ? 'active' : ''}}" data-bs-toggle="tab" href="#booking" role="tab">
            <span class="hidden-xs-down">Booking</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='facilities' ? 'active' : ''}}" data-bs-toggle="tab" href="#facilities" role="tab">
            <span class="hidden-xs-down">Facilities</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='news' ? 'active' : ''}}" data-bs-toggle="tab" href="#news" role="tab">
            <span class="hidden-xs-down">News</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='testimonial' ? 'active' : ''}}" data-bs-toggle="tab" href="#testimonial" role="tab">
            <span class="hidden-xs-down">Testimonial</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='contact_us' ? 'active' : ''}}" data-bs-toggle="tab" href="#contact_us" role="tab">
            <span class="hidden-xs-down">Contact Us</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='sections' ? 'active' : ''}}" data-bs-toggle="tab" href="#sections" role="tab">
            <span class="hidden-xs-down">Sections</span>
        </a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane {{ $active_tab=='navigation' ? 'active' : ''}} p-20" id="navigation" role="tabpanel">
        @include('admin.page.settings.subHome.detail')
    </div>
    <div class="tab-pane {{ $active_tab=='about' ? 'active' : ''}} p-20" id="about" role="tabpanel">
        @include('admin.page.settings.subHome.about')
    </div>
    <div class="tab-pane {{ $active_tab=='slider' ? 'active' : ''}} p-20" id="slider" role="tabpanel">
        @include('admin.page.settings.subHome.slider')
    </div>
    <div class="tab-pane {{ $active_tab=='category' ? 'active' : ''}} p-20" id="category" role="tabpanel">
        @include('admin.page.settings.subHome.category')
    </div>
    <div class="tab-pane {{ $active_tab=='service' ? 'active' : ''}} p-20" id="service" role="tabpanel">
        @include('admin.page.settings.subHome.service')
    </div>
    <div class="tab-pane {{ $active_tab=='booking' ? 'active' : ''}} p-20" id="booking" role="tabpanel">
        @include('admin.page.settings.subHome.booking')
    </div>
    <div class="tab-pane {{ $active_tab=='facilities' ? 'active' : ''}} p-20" id="facilities" role="tabpanel">
        @include('admin.page.settings.subHome.facilities')
    </div>
    <div class="tab-pane {{ $active_tab=='news' ? 'active' : ''}} p-20" id="news" role="tabpanel">
        @include('admin.page.settings.subHome.news')
    </div>
    <div class="tab-pane {{ $active_tab=='testimonial' ? 'active' : ''}} p-20" id="testimonial" role="tabpanel">
        @include('admin.page.settings.subHome.testimonial')
    </div>
    <div class="tab-pane {{ $active_tab=='contact_us' ? 'active' : ''}} p-20" id="contact_us" role="tabpanel">
        @include('admin.page.settings.subHome.contact_us')
    </div>
    <div class="tab-pane {{ $active_tab=='sections' ? 'active' : ''}} p-20" id="sections" role="tabpanel">
        @include('admin.page.settings.subHome.sections')
    </div>
</div>