@extends('admin.layout.app')

@section('title','Show Video Gallery')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">{{ __('Show Video Gallery') }}</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">{{ __('Show Video Gallery') }}</li>
        </ol>
        <a href="{{ route('pages.videogallery.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }}
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Show Video Gallery') }}</h4>

        <strong>Branch Name:</strong> {{ $page->branch?->name ?? '' }}
        <br>
        <strong>Title:</strong> {{ $page->title }}
        <br>
        <strong>Slug:</strong> {{ $page->slug }}
        <br>
        <strong>Description:</strong> {{ $page->description }}
        <br>
        <strong>Status:</strong> {{ $page->status }}
    </div>
</div>
@endsection
