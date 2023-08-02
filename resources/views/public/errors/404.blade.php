@extends('public.layout.app')

@section('title')
    Page Not Found
@endsection

@section('content')
<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Menu -->
<div class="cappa-wrap">
    <div class="cappa-wrap-inner rooms1">
        <nav class="cappa-menu">          
            <ul>
                <li>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-subtitle">{{ $branchSetting['navigation_sub_title'] }}</div>
                            <div class="section-title">{{ $branchSetting['navigation_title'] }}</div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach(branchList() as $brach)
                        <div class="col-md-12">
                            <a href="{{ asset($brach->url)}}">
                                <div class="item">
                                    <div class="position-re o-hidden">
                                        <img src="{{ asset($brach->thumbnail) }}" alt="">
                                    </div> 
                                    <span class="category">{{ strtoupper($brach->label)}}</span>
                                    <div class="con">
                                        <h5>{{ strtoupper($brach->name)}}</h5>
                                        <div class="line"></div>
                                        <div class="row facilities">
                                            <div class="col col-md-7"></div>
                                            <div class="col col-md-5 text-end">
                                                <div class="permalink"> 
                                                    {{ strtoupper($brach->url_title)}}
                                                    <i class="ti-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </li>
            </ul>
        </nav>
        @if($branchSetting['navigation_contact_lablel'] != '' && $branchSetting['navigation_contact_number'] != '')
        <div class="cappa-menu-footer">
            <div class="reservation">
                <a href="tel:{{ $branchSetting['navigation_contact_number'] }}">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="call">
                        {{ $branchSetting['navigation_contact_lablel'] }}<br>
                        <span>{{ $branchSetting['navigation_contact_number'] }}</span>
                    </div>
                </a>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- Logo & Menu Burger -->
<header class="cappa-header">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-6 col-md-6 cappa-logo-wrap">
                <a href="/" class="cappa-logo">
                    <img src="{{ asset($branchSetting['navigation_logo']) }}" alt="">
                </a>
            </div>
            <!-- Menu Burger -->
            <div class="col-6 col-md-6 text-right cappa-wrap-burger-wrap"> <a href="#" class="cappa-nav-toggle cappa-js-cappa-nav-toggle"><i></i></a> </div>
        </div>
    </div>
</header>
<section class="comming section-padding">
    <div class="v-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>404</h1>
                    <h2>Not Found 404</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 offset-md-3 text-center">
                    <p>The page you are looking for was moved, removed, renamed or never existed.</p>
                    <form>
                        <input type="text" name="search" placeholder="Search" required>
                        <button>Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection