@extends('admin.layout.app')

@section('title','Show Page')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">{{ __('Show Page') }}</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">{{ __('Page') }}</li>
        </ol>
        <a href="{{ route('pages.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }}
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body p-b-0">
        <h4 class="card-title">{{ __('Show Page') }}</h4>
        <h6 class="card-subtitle">Use section tab to setup page settings</h6>
        @if($page->branch->type == 'Main Branch' && $page->template == 'Home')
            @include('admin.page.settings.mainHome.index')
        @else

        @endif
    </div>
</div>
@endsection
