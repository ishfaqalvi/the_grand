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
<!-- Slider -->
@if($pageSetting['home_sections_slider'] == 'Show')
    @php($videoSlide = videoSliderList($page->branch_id))
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
    @else
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            @foreach(imageSliderList($page->branch_id) as $key => $slide)
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
<!-- Category -->
@if($pageSetting['home_sections_category'] == 'Show')
<section class="rooms1 section-padding bg-darkblack" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">{{ strtoupper($pageSetting['home_category_sub_title']) }}</div>
                <div class="section-title">{{ $pageSetting['home_category_title'] }}</div>
            </div>
        </div>
        <div class="row">
            @foreach(categoryList($page->branch_id) as $category)
            <div class="col-md-6">
                
                    <div class="item">
                        <div class="position-re o-hidden">
                            <img src="{{ asset($category->image) }}" alt="">
                        </div> 
                        <span class="category">{{ strtoupper($category->label)}}</span>
                        <div class="con">
                            <h5>{{ strtoupper($category->title)}}</h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7"></div>
                                <div class="col col-md-5 text-end">
                                    <a href="{{ asset($category->image_link).'?tab='.preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace(' ', '-', $category->title)) }}">
                                    <div class="permalink">
                                        {{ strtoupper($category->image_link_title)}}
                                    </div>
                                    </a>
                                    <span style="border-left: 0.2em solid #e4a853; height: 13px; margin: 0 8px 0 5px;"></span>
                                    <a href="{{ asset($category->video_link).'?tab='.preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace(' ', '-', $category->title)) }}">
                                    <div class="permalink">
                                        {{ strtoupper($category->video_link_title)}}
                                    </div>
                                    </a>
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
<!-- Services -->
@if($pageSetting['home_sections_service'] == 'Show')
<section class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">{{ strtoupper($pageSetting['home_service_sub_title']) }}</div>
                <div class="section-title">{{ $pageSetting['home_service_title'] }}</div>
            </div>
        </div>
        @foreach($page->services as $key => $service)
            @if ($key % 2 == 0)
                <div class="row">
                    <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img left">
                            <a href="{{ asset($service->link) }}"><img src="{{ asset($service->image) }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 bg-darkblack valign animate-box" data-animate-effect="fadeInRight">
                        <div class="content">
                            <div class="cont text-left">
                                <div class="info"><h6>{{ $service->sub_heading }}</h6></div>
                                <h4>{{ $service->heading }}</h4>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <p>{{ $service->description }}
                                            @if($service->detail)
                                            <div class="collapse" id="collapse_{{$key}}">
                                                {{ $service->detail }}
                                            </div>
                                            <a class="more-detail" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_{{$key}}" aria-expanded="false" aria-controls="collapse_{{$key}}">
                                                More Detail
                                            </a>
                                            @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @if($service->link != '' && $service->button_title != '')
                                <div class="butn-dark"> 
                                    <a href="{{ asset($service->link) }}"><span>
                                        {{ strtoupper($service->button_title) }}    
                                    </span></a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-6 bg-darkblack p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                        <div class="content">
                            <div class="cont text-left">
                                <div class="info"><h6>{{ $service->sub_heading }}</h6></div>
                                <h4>{{ $service->heading }}</h4>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <p>{{ $service->description }}
                                            @if($service->detail)
                                            <div class="collapse" id="collapse_{{$key}}">
                                                {{ $service->detail }}
                                            </div>
                                            <a class="more-detail" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_{{$key}}" aria-expanded="false" aria-controls="collapse_{{$key}}">
                                                More Detail
                                            </a>
                                            @endif
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                                @if($service->link != '' && $service->button_title != '')
                                <div class="butn-dark"> 
                                    <a href="{{ asset($service->link) }}"><span>
                                        {{ strtoupper($service->button_title) }}    
                                    </span></a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                        <div class="img">
                            <a href="{{ asset($service->link) }}"><img src="{{ asset($service->image) }}" alt=""></a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>
@endif
<!-- Booking -->
@if($pageSetting['home_sections_booking'] == 'Show')
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset($pageSetting['home_booking_bg_image']) }}" data-overlay-dark="3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonials-box">
                        <div class="head-box">
                            <h6>{{ strtoupper($pageSetting['home_booking_sub_title']) }}</h6>
                            <h4>{{ $pageSetting['home_booking_title'] }}</h4>
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
                <div class="col-md-4 offset-md-2">
                    <div class="booking-box">
                        <div class="head-box">
                            <h6>{{ strtoupper($pageSetting['home_booking_card_sub_title']) }}</h6>
                            <h4>{{ $pageSetting['home_booking_title'] }}</h4>
                        </div>
                        <div class="booking-inner clearfix">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-secondary">{{ $pageSetting['home_booking_card_desc'] }}</p>
                                </div>
                                <div class="col-md-12">
                                    <a href="{{ $pageSetting['home_booking_card_btn_url']}}" class="btn-form1-submit mt-15 text-center">
                                        {{ strtoupper($pageSetting['home_booking_card_btn_title']) }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- Facilties -->
@if($pageSetting['home_sections_facilities'] == 'Show')
<section class="facilties section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">{{ strtoupper($pageSetting['home_facilities_sub_title']) }}</div>
                <div class="section-title">{{ $pageSetting['home_facilities_title'] }}</div>
            </div>
        </div>
        <div class="row">
            @foreach($page->facilities as $key => $facility)
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                    <span class="{{ $facility->icon }}"></span>
                    <h5>{{ $facility->title }}</h5>
                    <p>{{ $facility->description }}</p>
                    <div class="facility-shape"> <span class="{{ $facility->icon }}"></span> </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- News -->
@if($pageSetting['home_sections_news'] == 'Show')
<section class="news section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle"><span>{{ strtoupper($pageSetting['home_news_sub_title']) }}</span></div>
                <div class="section-title">{{ strtoupper($pageSetting['home_news_title']) }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    @foreach($page->news as $key => $news)
                    <div class="item">
                        <a href="{{ asset($news->url) }}">
                            <div class="position-re o-hidden"> <img src="{{ asset($news->image) }}" alt="">
                                <div class="date">
                                    <span>{{ \Carbon\Carbon::parse($news->date)->format('F') }}</span> 
                                    <i>{{ \Carbon\Carbon::parse($news->date)->format('d') }}</i>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    {{ $news->sub_heading}}
                                </span>
                                <h5>{{ $news->heading}}</h5>
                                <p class="text-secondary mb-0">{{ $news->description}}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- Testiominals -->
@if($pageSetting['home_sections_testimonial'] == 'Show')
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset($pageSetting['home_testimonial_bg_image']) }}" data-overlay-dark="3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="testimonials-box">
                        <div class="head-box">
                            <h6>{{ strtoupper($pageSetting['home_testimonial_sub_title']) }}</h6>
                            <h4>{{ $pageSetting['home_testimonial_title'] }}</h4>
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
@if($pageSetting['home_sections_contact_us'] == 'Show')
<section class="pricing section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="section-subtitle">
                    <span>{{ strtoupper($pageSetting['home_contact_us_sub_title']) }}</span>
                </div>
                <div class="section-title">{{ $pageSetting['home_contact_us_title'] }}</div>
                <p class="color-2">{{ $pageSetting['home_contact_us_desc'] }}</p>
                <a href="{{ asset($pageSetting['home_contact_us_btn_url']) }}">
                    <button type="submit" class="btn-form1-submit mt-15 px-3">
                        {{ strtoupper($pageSetting['home_contact_us_btn_title']) }}
                    </button>
                </a>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="pricing-card">
                    <img src="{{ asset($pageSetting['home_contact_us_card1_image']) }}" alt="">
                    <div class="desc">
                        <div class="name">{{ $pageSetting['home_contact_us_card1_title'] }}</div>
                        <p class="text-secondary">{{ $pageSetting['home_contact_us_card1_desc'] }}</p>
                        @if($pageSetting['home_contact_us_card1_phone_title'] != '' && $pageSetting['home_contact_us_card1_phone'] != '')
                        <div class="reservations">
                            <div class="icon"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-2">{{ $pageSetting['home_contact_us_card1_phone_title'] }}</p> 
                                <a href="tel:{{ $pageSetting['home_contact_us_card1_phone'] }}">
                                    {{ $pageSetting['home_contact_us_card1_phone'] }}
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="pricing-card">
                    <img src="{{ asset($pageSetting['home_contact_us_card2_image']) }}" alt="">
                    <div class="desc">
                        <div class="name">{{ $pageSetting['home_contact_us_card2_title'] }}</div>
                        <p class="text-secondary">{{ $pageSetting['home_contact_us_card2_desc'] }}</p>
                        @if($pageSetting['home_contact_us_card2_btn_url'] != '' && $pageSetting['home_contact_us_card2_btn_title'] != '')
                        <div class="col-md-12" style="text-align: center;">
                            <a href="{{ asset($pageSetting['home_contact_us_card2_btn_url']) }}" class="btn-form1-submit">
                                {{ strtoupper($pageSetting['home_contact_us_card2_btn_title']) }}
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
    @if($pageSetting['home_sections_footer'] == 'Show')
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">{{ $branchSetting['footer_first_lable'] }}</h3>
                        <p class="footer-about-text">{{ $branchSetting['footer_description'] }}</p>
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
                                {{ $branchSetting['footer_phone_number'] }}
                            </p>
                            @endif
                            @if($branchSetting['footer_email'] != '')
                            <p class="footer-contact-mail">{{ $branchSetting['footer_email'] }}</p>
                            @endif
                        </div>
                        <div class="footer-about-social-list">
                            <a href="{{ $branchSetting['footer_instagram_link'] }}"><i class="ti-instagram"></i></a>
                            <a href="{{ $branchSetting['footer_twitter_link'] }}"><i class="ti-twitter"></i></a>
                            <a href="{{ $branchSetting['footer_youtube_link'] }}"><i class="ti-youtube"></i></a>
                            <a href="{{ $branchSetting['footer_facebook_link'] }}"><i class="ti-facebook"></i></a>
                            <a href="{{ $branchSetting['footer_pinterest_link'] }}"><i class="ti-pinterest"></i></a>
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
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">{{ $branchSetting['copyright_text'] }} 
                            <a href="{{ asset($branchSetting['copyright_link']) }}">
                                {{ $branchSetting['copyright_link_title'] }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</footer>