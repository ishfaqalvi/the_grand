@extends('public.layout.app')

@section('title'){{$page->metaTitle ?? 'The Cappa Luxury Hotel'}}@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('public/css/test.css') }}" />
@endsection

@section('content')
<!-- Preloader -->
@if($pageSetting['home_sections_pageloader'] == 'Show')
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>
@endif
<!-- Progress scroll totop -->
@if($pageSetting['home_sections_scrollprogress'] == 'Show')
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
@endif
<!-- Navbar -->
@if($pageSetting['home_sections_navigation'] == 'Show')
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="index.html">
            	<img src="{{ asset($branchSetting['navigation_logo']) }}" class="logo-img" alt="">
            </a>
        </div>
        <!-- Button -->
        <button 
        	class="navbar-toggler" 
        	type="button" 
        	data-bs-toggle="collapse" 
        	data-bs-target="#navbar" 
        	aria-controls="navbar" 
        	aria-expanded="false" 
        	aria-label="Toggle navigation"> 
        	<span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                @foreach(headerMenus($page->branch_id) as $menu)
                    @if(count($menu->childItems) > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">{{ $menu->title }} <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            @foreach($menu->childItems as $item)
                            <li><a href="{{ asset($item->url) }}" class="dropdown-item">
                                <span>{{ $item->title }}</span>
                            </a></li>
                            @endforeach
                        </ul>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{ asset($menu->url) }}">{{ $menu->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>
@endif
<!-- Slider -->
@if($pageSetting['home_sections_slider'] == 'Show')
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        @foreach(sliderList($page->branch_id) as $key => $slide)
        <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ asset($slide->image)}}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <span>
                                @for ($i = 0; $i < $slide->stars; $i++)
                                    <i class="star-rating"></i>
                                @endfor
                            </span>
                            <h4>{{ strtoupper($slide->sub_title) }}</h4>
                            <h1>{{ strtoupper($slide->title) }}</h1>
                            @if($slide->button_text != '' && $slide->link != '')
                            <div class="butn-light mt-30 mb-30"> 
                                <a href="{{ asset($slide->link) }}" target="{{ $slide->linktype == 'External' ? '_blank' : ''}}" data-scroll-nav="1">
                                    <span>{{ strtoupper($slide->button_text) }}</span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</header>
@endif
<!-- About -->
@if($pageSetting['home_sections_about'] == 'Show')
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <span>
                    @for ($i = 0; $i < $pageSetting['home_about_stars']; $i++)
                        <i class="star-rating"></i>
                    @endfor
                </span>
                <div class="section-subtitle">{{ strtoupper($pageSetting['home_about_sub_title']) }}</div>
                <div class="section-title">{{ $pageSetting['home_about_title'] }}</div>
                <p>{{ $pageSetting['home_about_description'] }}</p>
                <!-- call -->
                @if($pageSetting['home_about_contact_label'] != '' && $pageSetting['home_about_contact_number'])
                <div class="reservations">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>{{ $pageSetting['home_about_contact_label'] }}</p>
                        <a href="tel:{{ $pageSetting['home_about_contact_number'] }}">
                            {{ $pageSetting['home_about_contact_number'] }}
                        </a>
                    </div>
                </div>
                @endif
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                <img src="{{ asset($pageSetting['home_about_first_image']) }}" alt="" class="mt-90 mb-30">
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                <img src="{{ asset($pageSetting['home_about_second_image']) }}" alt="">
            </div>
        </div>
    </div>
</section>
@endif
@endsection