@extends('public.layout.app')

@section('title'){{$page->metaTitle ?? 'The Cappa Luxury Hotel'}}@endsection

@section('head')
    <meta name="description"content="{{ $page->metaDescription }}"/>
    <meta name="robots"     content="{{ $page->index == 'No' ? 'noindex, nofollow' : 'index, follow' }}">

    <!-- Open Graph general -->
    {!! $page->og_tags !!}
    <!-- Open Graph general -->

    <!-- Schema.org for Google -->
    {!! $page->schemas !!}
    <!-- Schema.org for Google -->
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
<!-- Menu -->
@if($pageSetting['home_sections_navigation'] == 'Show')
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
                                    <!-- <span class="category">{{ strtoupper($brach->label)}}</span> -->
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
@endif
<!-- Slider -->
@if($pageSetting['home_sections_slider'] == 'Show')
    @php($videoSlide = videoSliderList($page->branch_id))
    @php($imageSlides = imageSliderList($page->branch_id))
    @if($pageSetting['home_slider_type'] == 'Video' && isset($videoSlide))
    <header class="header">
        <div class="video-fullscreen-wrap">
            <div class="video-fullscreen-video" data-overlay-dark="6">
                <video playsinline="" autoplay="" loop="" muted="">
                    <source src="{{ asset($videoSlide->video)}}" type="video/mp4" autoplay="" loop="" muted="">
                </video>
            </div>
            <div class="v-middle caption overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <span>
                                @for ($i = 0; $i < $videoSlide->stars; $i++)
                                    <i class="star-rating"></i>
                                @endfor
                            </span>
                            <h4>{{ strtoupper($videoSlide->sub_title) }}</h4>
                            <h1>{{ strtoupper($videoSlide->title) }}</h1>
                            @if($videoSlide->button_text != '' && $videoSlide->link != '')
                            <div class="butn-light mt-30 mb-30">
                                <a href="{{ asset($videoSlide->link) }}" target="{{ $videoSlide->linktype == 'External' ? '_blank' : ''}}" data-scroll-nav="2">
                                    <span>{{ strtoupper($videoSlide->button_text) }}</span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    @elseif($pageSetting['home_slider_type'] == 'Image' && count($imageSlides) > 0)
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            @foreach($imageSlides as $key => $slide)
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
                <p>{!! $pageSetting['home_about_description'] !!}</p>
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
<!-- Rooms -->
@if($pageSetting['home_sections_branches'] == 'Show')
<section class="rooms1 section-padding bg-darkblack" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">{{ strtoupper($pageSetting['home_branches_sub_title']) }}</div>
                <div class="section-title">{{ $pageSetting['home_branches_title'] }}</div>
            </div>
        </div>
        <div class="row">
            @foreach(branchList() as $branch)
            <div class="col-md-6">
                <a href="{{ $branch->url == '/' ? route('home') : $branch->url }}">
                    <div class="item">
                        <div class="position-re o-hidden">
                            <img src="{{ asset($branch->thumbnail) }}" alt="">
                        </div>
                        <span class="category">{{ strtoupper($branch->label)}}</span>
                        <div class="con">
                            <h5>{{ strtoupper($branch->name)}}</h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7"></div>
                                <div class="col col-md-5 text-end">
                                    <div class="permalink">
                                        {{ strtoupper($branch->url_title)}}
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
    </div>
</section>
@endif
<!-- Footer -->
<footer class="footer">
    @if($pageSetting['home_sections_footer'] == 'Show')
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">{{ $branchSetting['footer_first_lable'] }}</h3>
                        <p class="footer-about-text">{!! $branchSetting['footer_description'] !!}</p>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">{{ $branchSetting['footer_second_lable'] }}</h3>
                        <ul class="footer-explore-list list-unstyled">
                            @foreach(footerMenus($page->branch_id) as $menu)
                            <li><a href="{{ asset($menu->url) }}">{{ $menu->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">{{ $branchSetting['footer_third_lable'] }}</h3>
                        <p class="footer-contact-text">{{ $branchSetting['footer_address'] }}</p>
                        <div class="footer-contact-info">
                            @if($branchSetting['footer_phone_number'] != '')
                            <p class="footer-contact-phone"><span class="flaticon-call"></span>
                                <a href="tel:{{ $branchSetting['footer_phone_number'] }}">{{ $branchSetting['footer_phone_number'] }}</a>
                            </p>
                            @endif
                            @if($branchSetting['footer_email'] != '')
                            <a href="mailto:{{ $branchSetting['footer_email'] }}" class="footer-contact-mail">{{ $branchSetting['footer_email'] }}</a>
                            @endif
                        </div>
                        <div class="footer-about-social-list">
                            @if($branchSetting['footer_instagram_link'] != '')
                            <a href="{{ $branchSetting['footer_instagram_link'] }}" target="blank">
                                <i class="ti-instagram"></i>
                            </a>
                            @endif
                            @if($branchSetting['footer_snapchat_link'] != '')
                            <a href="{{ $branchSetting['footer_snapchat_link'] }}" target="blank">
                                <i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
                            </a>
                            @endif
                            @if($branchSetting['footer_tiktok_link'] != '')
                            <a href="{{ $branchSetting['footer_tiktok_link'] }}" target="blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                            @endif
                            @if($branchSetting['footer_twitter_link'] != '')
                            <a href="{{ $branchSetting['footer_twitter_link'] }}" target="blank">
                                <i class="ti-twitter"></i>
                            </a>
                            @endif
                            @if($branchSetting['footer_youtube_link'] != '')
                            <a href="{{ $branchSetting['footer_youtube_link'] }}" target="blank">
                                <i class="ti-youtube"></i>
                            </a>
                            @endif
                            @if($branchSetting['footer_facebook_link'] != '')
                            <a href="{{ $branchSetting['footer_facebook_link'] }}" target="blank">
                                <i class="ti-facebook"></i>
                            </a>
                            @endif
                            @if($branchSetting['footer_pinterest_link'] != '')
                            <a href="{{ $branchSetting['footer_pinterest_link'] }}" target="blank">
                                <i class="ti-pinterest"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if($pageSetting['home_sections_copyright'] == 'Show')
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">{{ $branchSetting['copyright_text'] }}
                            <a href="{{ asset($branchSetting['copyright_link']) }}" target="blank">
                                {{ $branchSetting['copyright_link_title'] }}
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">Developed with ❤️ by <a href="https://www.dazzle-lab.com/" target="blank">Dazzle Lab</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</footer>
@endsection
