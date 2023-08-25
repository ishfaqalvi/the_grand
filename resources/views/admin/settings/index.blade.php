@extends('admin.layout.app')

@section('title','Settings')
    
@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Settings</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body p-b-0">
        <h4 class="card-title">Website Settings</h4>
        <h6 class="card-subtitle">Use section tab to setup this settings</h6>
        <ul class="nav nav-tabs customtab2" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ $active_tab=='navigation' ? 'active' : ''}}" data-bs-toggle="tab" href="#navigation" role="tab">
                    <span class="hidden-xs-down">Navigation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active_tab=='footer' ? 'active' : ''}}" data-bs-toggle="tab" href="#footer" role="tab">
                    <span class="hidden-xs-down">Footer</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active_tab=='copyright' ? 'active' : ''}}" data-bs-toggle="tab" href="#copyright" role="tab">
                    <span class="hidden-xs-down">Copyright</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active_tab=='analytics' ? 'active' : ''}}" data-bs-toggle="tab" href="#analytics" role="tab">
                    <span class="hidden-xs-down">Analytics</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane {{ $active_tab=='navigation' ? 'active' : ''}} p-20" id="navigation" role="tabpanel">
                @include('admin.settings.include.navigation')
            </div>
            <div class="tab-pane {{ $active_tab=='footer' ? 'active' : ''}} p-20" id="footer" role="tabpanel">
                @include('admin.settings.include.footer')
            </div>
            <div class="tab-pane {{ $active_tab=='copyright' ? 'active' : ''}} p-20" id="copyright" role="tabpanel">
                @include('admin.settings.include.copyright')
            </div>
            <div class="tab-pane {{ $active_tab=='analytics' ? 'active' : ''}} p-20" id="analytics" role="tabpanel">
                @include('admin.settings.include.analytics')
            </div>
        </div>
    </div>
</div>
@endsection