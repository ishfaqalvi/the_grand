<!-- Preloader -->
@if($pageSetting['contact_sections_pageloader'] == 'Show')
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>
@endif
<!-- Progress scroll totop -->
@if($pageSetting['contact_sections_scrollprogress'] == 'Show')
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
@endif
<!-- Navbar -->
@if($pageSetting['contact_sections_navigation'] == 'Show')
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
@if($pageSetting['contact_sections_banner'] == 'Show')
<div 
    class="banner-header section-padding valign bg-img bg-fixed" 
    data-overlay-dark="4" 
    data-background="{{ asset($pageSetting['contact_banner_bg_image']) }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>{{ $pageSetting['contact_banner_heading'] }}</h5>
                <h1>{{ $pageSetting['contact_banner_sub_heading'] }}</h1>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Contact -->
<section class="contact section-padding">
    <div class="container">
        <div class="row mb-90">
            @if($pageSetting['contact_sections_contactUs'] == 'Show')
            <div class="col-md-6 mb-60">
                <h3>{{ $pageSetting['contact_contactUs_title'] }}</h3>
                <p>{!! $pageSetting['contact_contactUs_desc'] !!}</p>
                @if($pageSetting['contact_contactUs_phone_label'] != '' && $pageSetting['contact_contactUs_phone_number'] != '')
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>{{ $pageSetting['contact_contactUs_phone_label'] }}</p>
                        <a href="tel:{{ $pageSetting['contact_contactUs_phone_number'] }}">
                            {{ $pageSetting['contact_contactUs_phone_number'] }}
                        </a>
                    </div>
                </div>
                @endif
                @if($pageSetting['contact_contactUs_email_label'] != '' && $pageSetting['contact_contactUs_email'] != '')
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-envelope"></span></div>
                    <div class="text">
                        <p>{{ $pageSetting['contact_contactUs_email_label'] }}</p>
                        <a href="mailto:{{ $pageSetting['contact_contactUs_email'] }}">
                            {{ $pageSetting['contact_contactUs_email'] }}
                        </a>
                    </div>
                </div>
                @endif
                @if($pageSetting['contact_contactUs_address_label'] != '' && $pageSetting['contact_contactUs_address'] != '')
                <div class="reservations">
                    <div class="icon"><span class="flaticon-location-pin"></span></div>
                    <div class="text">
                        <p>{{ $pageSetting['contact_contactUs_address_label'] }}</p> 
                        {{ $pageSetting['contact_contactUs_address'] }}
                    </div>
                </div>
                @endif
            </div>
            @endif
            @if($pageSetting['contact_sections_form'] == 'Show')
            <div class="col-md-5 mb-30 offset-md-1">
                <h3>{{ $pageSetting['contact_form_title'] }}</h3>
                <form method="post"  action="{{ route('contactUs.store')}}">
                    @csrf
                    <!-- form error -->
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- form message -->
                    @if(Session::get('contactMessage') == 'success')
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" role="alert">
                                {{ $pageSetting['contact_form_return_message'] ?? 'Message Sent Successfully.' }}
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- form elements -->
                    <input type="hidden" name="branch_id" value="{{ $page->branch_id }}">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" placeholder="{{ $pageSetting['contact_form_palceholder_name'] }} *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" placeholder="{{ $pageSetting['contact_form_palceholder_email'] }} *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="number" type="text" placeholder="{{ $pageSetting['contact_form_palceholder_number'] }} *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="subject" type="text" placeholder="{{ $pageSetting['contact_form_palceholder_subject'] }} *" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="message" id="message" cols="30" rows="4" placeholder="{{ $pageSetting['contact_form_palceholder_message'] }} *" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="butn-dark2"><span>{{ $pageSetting['contact_form_btn_title'] }}</span></button>
                        </div>
                    </div>
                </form>
            </div>
            @endif
        </div>
        <!-- Map Section -->
        @if($pageSetting['contact_sections_map'] == 'Show')
        <div class="row">
            <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
                <iframe src="{{ $pageSetting['contact_google_map_url'] }}" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- Booking -->
@if($pageSetting['contact_sections_booking'] == 'Show')
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset($pageSetting['contact_booking_bg_image']) }}" data-overlay-dark="3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonials-box">
                        <div class="head-box">
                            <h6>{{ strtoupper($pageSetting['contact_booking_sub_title']) }}</h6>
                            <h4>{{ $pageSetting['contact_booking_card_title'] }}</h4>
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
                            <h6>{{ strtoupper($pageSetting['contact_booking_card_sub_title']) }}</h6>
                            <h4>{{ $pageSetting['contact_booking_title'] }}</h4>
                        </div>
                        <div class="booking-inner clearfix">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-secondary">{!! $pageSetting['contact_booking_card_desc'] !!}</p>
                                </div>
                                <div class="col-md-12">
                                    <a href="{{ $pageSetting['contact_booking_card_btn_url']}}" class="btn-form1-submit text-center mt-15">
                                        {{ strtoupper($pageSetting['contact_booking_card_btn_title']) }}
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
<!-- Footer -->
<footer class="footer">
    @if($pageSetting['contact_sections_footer'] == 'Show')
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
    @if($pageSetting['contact_sections_copyright'] == 'Show')
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
                        <p class="footer-bottom-copy-right">Developed with ❤️ by <a href="https://www.dazzle-lab.com/"  target="blank">Dazzle Lab</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</footer>