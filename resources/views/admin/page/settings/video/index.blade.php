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
        <a class="nav-link {{ $active_tab=='video' ? 'active' : ''}}" data-bs-toggle="tab" href="#video" role="tab">
            <span class="hidden-xs-down">Video</span>
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
        @include('admin.page.settings.video.detail')
    </div>
    <div class="tab-pane {{ $active_tab=='banner' ? 'active' : ''}} p-20" id="banner" role="tabpanel">
        @include('admin.page.settings.video.banner')
    </div>
    <div class="tab-pane {{ $active_tab=='video' ? 'active' : ''}} p-20" id="video" role="tabpanel">
        @include('admin.page.settings.video.video')
    </div>
    <div class="tab-pane {{ $active_tab=='testimonial' ? 'active' : ''}} p-20" id="testimonial" role="tabpanel">
        @include('admin.page.settings.video.testimonial')
    </div>
    <div class="tab-pane {{ $active_tab=='contact_us' ? 'active' : ''}} p-20" id="contact_us" role="tabpanel">
        @include('admin.page.settings.video.contact_us')
    </div>
    <div class="tab-pane {{ $active_tab=='sections' ? 'active' : ''}} p-20" id="sections" role="tabpanel">
        @include('admin.page.settings.video.sections')
    </div>
</div>