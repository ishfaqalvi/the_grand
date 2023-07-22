<ul class="nav nav-tabs customtab2" role="tablist">
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='navigation' ? 'active' : ''}}" data-bs-toggle="tab" href="#navigation" role="tab">
            <span class="hidden-sm-up"><i class="ti-home"></i></span>
            <span class="hidden-xs-down">Detail</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='slider' ? 'active' : ''}}" data-bs-toggle="tab" href="#slider" role="tab">
            <span class="hidden-sm-up"><i class="ti-home"></i></span>
            <span class="hidden-xs-down">Slider</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='about' ? 'active' : ''}}" data-bs-toggle="tab" href="#about" role="tab">
            <span class="hidden-sm-up"><i class="ti-home"></i></span>
            <span class="hidden-xs-down">About</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='branches' ? 'active' : ''}}" data-bs-toggle="tab" href="#branches" role="tab">
            <span class="hidden-sm-up"><i class="ti-home"></i></span>
            <span class="hidden-xs-down">Branches</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active_tab=='sections' ? 'active' : ''}}" data-bs-toggle="tab" href="#sections" role="tab">
            <span class="hidden-sm-up"><i class="ti-home"></i></span>
            <span class="hidden-xs-down">Sections</span>
        </a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane {{ $active_tab=='navigation' ? 'active' : ''}} p-20" id="navigation" role="tabpanel">
        @include('admin.page.settings.mainHome.detail')
    </div>
    <div class="tab-pane {{ $active_tab=='about' ? 'active' : ''}} p-20" id="about" role="tabpanel">
        @include('admin.page.settings.mainHome.about')
    </div>
    <div class="tab-pane {{ $active_tab=='slider' ? 'active' : ''}} p-20" id="slider" role="tabpanel">
        @include('admin.page.settings.mainHome.slider')
    </div>
    <div class="tab-pane {{ $active_tab=='branches' ? 'active' : ''}} p-20" id="branches" role="tabpanel">
        @include('admin.page.settings.mainHome.branches')
    </div>
    <div class="tab-pane {{ $active_tab=='sections' ? 'active' : ''}} p-20" id="sections" role="tabpanel">
        @include('admin.page.settings.mainHome.sections')
    </div>
</div>