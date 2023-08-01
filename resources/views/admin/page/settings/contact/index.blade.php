<ul class="nav nav-tabs customtab2" role="tablist">
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='navigation' ? 'active' : ''}}" data-bs-toggle="tab" href="#navigation" role="tab">
            <span class="hidden-xs-down">Detail</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='banner' ? 'active' : ''}}" data-bs-toggle="tab" href="#banner" role="tab">
            <span class="hidden-xs-down">Banner</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='contact' ? 'active' : ''}}" data-bs-toggle="tab" href="#contact" role="tab">
            <span class="hidden-xs-down">Contact Us</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='form' ? 'active' : ''}}" data-bs-toggle="tab" href="#form" role="tab">
            <span class="hidden-xs-down">Form</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='map' ? 'active' : ''}}" data-bs-toggle="tab" href="#map" role="tab">
            <span class="hidden-xs-down">Google Map</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='booking' ? 'active' : ''}}" data-bs-toggle="tab" href="#booking" role="tab">
            <span class="hidden-xs-down">Booking</span>
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
        @include('admin.page.settings.contact.detail')
    </div>
    
    <div class="tab-pane {{ $active_tab=='banner' ? 'active' : ''}} p-20" id="banner" role="tabpanel">
        @include('admin.page.settings.contact.banner')
    </div>
    <div class="tab-pane {{ $active_tab=='contact' ? 'active' : ''}} p-20" id="contact" role="tabpanel">
        @include('admin.page.settings.contact.contact')
    </div>
    <div class="tab-pane {{ $active_tab=='form' ? 'active' : ''}} p-20" id="form" role="tabpanel">
        @include('admin.page.settings.contact.form')
    </div>
    <div class="tab-pane {{ $active_tab=='map' ? 'active' : ''}} p-20" id="map" role="tabpanel">
        @include('admin.page.settings.contact.map')
    </div>
    <div class="tab-pane {{ $active_tab=='booking' ? 'active' : ''}} p-20" id="booking" role="tabpanel">
        @include('admin.page.settings.contact.booking')
    </div>
    <div class="tab-pane {{ $active_tab=='sections' ? 'active' : ''}} p-20" id="sections" role="tabpanel">
        @include('admin.page.settings.contact.sections')
    </div>
</div>