<!-- Preloader -->
@if($pageSetting['video_sections_pageloader'] == 'Show')
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>
@endif
<!-- Progress scroll totop -->
@if($pageSetting['video_sections_scrollprogress'] == 'Show')
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
@endif
<!-- Navbar -->
@if($pageSetting['video_sections_navigation'] == 'Show')
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="/">
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
<!-- Header Banner -->
@if($pageSetting['video_sections_banner'] == 'Show')
<div 
    class="banner-header section-padding valign bg-img bg-fixed" 
    data-overlay-dark="4" 
    data-background="{{ asset($pageSetting['video_banner_bg_image']) }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>{{ $pageSetting['video_banner_sub_heading'] }}</h5>
                <h1>{{ $pageSetting['video_banner_heading'] }}</h1>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Video Gallery -->
@if($pageSetting['video_sections_videos'] == 'Show')
<section class="section-padding">
    <div class="container">
        <div class="row tabs_images">
            <div class="col-md-12">
                <div class="section-subtitle">{{ $pageSetting['video_videos_sub_heading'] }}</div>
                <div class="section-title">{{ $pageSetting['video_videos_heading'] }}</div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <div class="widget sticky-top">
                            <ul class="tags tabs">
                                <li class="tab-items {{ request()->get('tab') ? '' : 'active'}}">
                                    <button class="tab-button text-light" data-target="all">All</button>
                                </li>
                                @foreach(categoryList($page->branch_id) as $key => $category)
                                <li class="tab-items {{ request()->get('tab') == preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace(' ', '-', $category->title)) ? 'active' : ''}}">
                                    <button class="tab-button text-light" data-target="tab{{ $key }}">
                                        {{ $category->title }}
                                    </button>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9">
                        <div class="row tab-content {{ request()->get('tab') ? '' : 'active'}}" id="all"></div>
                        @foreach(categoryList($page->branch_id) as $key => $category)
                        <div class="tab-content {{ request()->get('tab') === preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace(' ', '-', $category->title)) ? 'active' : ''}}" id="tab{{ $key }}">
                            <div class="row">
                                @foreach(videos($category->id) as $index => $video)
                                    @if($index % 5 < 2) <!-- First 2 video pattern -->
                                    <div class="col-md-6">
                                        <div class="vid-area mb-15">
                                            <a href="{{ $video->video_link}}" class="vid pt-0 mt-0">
                                                <div class="vid-icon">
                                                    <img src="{{ asset('upload/images/gallery/thumbnail/medium/'.$video->video_thumbnail) }}" alt="Vimeo">
                                                    <a class="video-gallery-button vid" href="{{ $video->video_link}}">
                                                        <span class="video-gallery-polygon">
                                                            <i class="ti-control-play"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @else <!-- Next 3 images pattern -->
                                    <div class="col-md-4">
                                        <div class="vid-area mb-15">
                                            <a href="{{ $video->video_link}}" class="vid pt-0 mt-0">
                                                <div class="vid-icon">
                                                    <img src="{{ asset('upload/images/gallery/thumbnail/small/'.$video->video_thumbnail) }}" alt="Vimeo">
                                                    <a class="video-gallery-button vid" href="{{ $video->video_link}}">
                                                        <span class="video-gallery-polygon">
                                                            <i class="ti-control-play"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tabs = document.querySelectorAll('.tab-content:not(#all)');
        var allTab = document.getElementById('all');

        tabs.forEach(function(tab) {
            allTab.innerHTML += tab.innerHTML;
        });

        var tabButtons = document.querySelectorAll('.tab-button');

        tabButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var target = button.getAttribute('data-target');

                document.querySelectorAll('.tab-content').forEach(function(tab) {
                    tab.classList.remove('active');
                });
                document.querySelectorAll('.tab-items').forEach(function(tab) {
                    tab.classList.remove('active');
                });
                button.parentElement.classList.add('active');
                document.getElementById(target).classList.add('active');
            });
        });
    });
</script>
@endif
<!-- Testiominals -->
@if($pageSetting['video_sections_testimonial'] == 'Show')
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset($pageSetting['video_testimonial_bg_image']) }}" data-overlay-dark="3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="testimonials-box">
                        <div class="head-box">
                            <h6>{{ strtoupper($pageSetting['video_testimonial_sub_title']) }}</h6>
                            <h4>{{ $pageSetting['video_testimonial_title'] }}</h4>
                            <div class="line"></div>
                        </div>
                        <div class="owl-carousel owl-theme">
                            @foreach(testimonials($page->branch_id) as $testimonial)
                            <div class="item">
                                <span class="quote"><img src="{{ asset('public/img/quot.png') }}" alt=""></span>
                                <p>{{ $testimonial->message }}</p>
                                <div class="info">
                                    <div class="author-img"> <img src="{{ asset($testimonial->image) }}" alt=""> </div>
                                    <div class="cont"> 
                                        <span>
                                            @for ($i = 0; $i < $testimonial->stars; $i++)
                                                <i class="star-rating"></i>
                                            @endfor
                                        </span>
                                        <h6>{{ strtoupper($testimonial->name) }}</h6>
                                        <span>{{ $testimonial->auther }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- Pricing -->
@if($pageSetting['video_sections_contact_us'] == 'Show')
<section class="pricing section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="section-subtitle">
                    <span>{{ strtoupper($pageSetting['video_contact_us_sub_title']) }}</span>
                </div>
                <div class="section-title">{{ $pageSetting['video_contact_us_title'] }}</div>
                <p class="color-2">{!! $pageSetting['video_contact_us_desc'] !!}</p>
                <a href="{{ asset($pageSetting['video_contact_us_btn_url']) }}"  target="blank">
                    <button type="submit" class="btn-form1-submit mt-15 px-3">
                        {{ strtoupper($pageSetting['video_contact_us_btn_title']) }}
                    </button>
                </a>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="pricing-card">
                    <img src="{{ asset($pageSetting['video_contact_us_card1_image']) }}" alt="">
                    <div class="desc">
                        <div class="name">{{ $pageSetting['video_contact_us_card1_title'] }}</div>
                        <p class="text-secondary">{!! $pageSetting['video_contact_us_card1_desc'] !!}</p>
                        @if($pageSetting['video_contact_us_card1_phone_title'] != '' && $pageSetting['video_contact_us_card1_phone'] != '')
                        <div class="reservations">
                            <div class="icon"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-2">{{ $pageSetting['video_contact_us_card1_phone_title'] }}</p> 
                                <a href="tel:{{ $pageSetting['video_contact_us_card1_phone'] }}">
                                    {{ $pageSetting['video_contact_us_card1_phone'] }}
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="pricing-card">
                    <img src="{{ asset($pageSetting['video_contact_us_card2_image']) }}" alt="">
                    <div class="desc">
                        <div class="name">{{ $pageSetting['video_contact_us_card2_title'] }}</div>
                        <p class="text-secondary">{!! $pageSetting['video_contact_us_card2_desc'] !!}</p>
                        @if($pageSetting['video_contact_us_card2_btn_url'] != '' && $pageSetting['video_contact_us_card2_btn_title'] != '')
                        <div class="col-md-12" style="text-align: center;">
                            <a href="{{ asset($pageSetting['video_contact_us_card2_btn_url']) }}" class="btn-form1-submit"  target="blank">
                                {{ strtoupper($pageSetting['video_contact_us_card2_btn_title']) }}
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- Footer -->
<footer class="footer">
    @if($pageSetting['video_sections_footer'] == 'Show')
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
                            <a href="{{ $branchSetting['footer_instagram_link'] }}" target="blank"><i class="ti-instagram"></i></a>
                            <a href="{{ $branchSetting['footer_twitter_link'] }}" target="blank"><i class="ti-twitter"></i></a>
                            <a href="{{ $branchSetting['footer_youtube_link'] }}" target="blank"><i class="ti-youtube"></i></a>
                            <a href="{{ $branchSetting['footer_facebook_link'] }}" target="blank"><i class="ti-facebook"></i></a>
                            <a href="{{ $branchSetting['footer_pinterest_link'] }}" target="blank"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if($pageSetting['video_sections_copyright'] == 'Show')
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-start">
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
                        <p class="footer-bottom-copy-right">Developed with ❤️ by <a href="Www.dazzle-lab.com"  target="blank">Dazzle Lab</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</footer>