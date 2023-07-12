<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset(settings('page_title_icon')) }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&family=Barlow+Condensed&family=Gilda+Display&display=swap">
    <link rel="stylesheet" href="{{ asset('public/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}"/>
    @yield('head')
</head>
<body>
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
	@yield('content')

    <!-- jQuery -->
    <script src="{{ asset('public/js/jquery-3.6.3.min.js        ') }}"></script>
    <script src="{{ asset('public/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('public/js/modernizr-2.6.2.min.js     ') }}"></script>
    <script src="{{ asset('public/js/imagesloaded.pkgd.min.js   ') }}"></script>
    <script src="{{ asset('public/js/jquery.isotope.v3.0.2.js   ') }}"></script>
    <script src="{{ asset('public/js/pace.js                    ') }}"></script>
    <script src="{{ asset('public/js/popper.min.js              ') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js           ') }}"></script>
    <script src="{{ asset('public/js/scrollIt.min.js            ') }}"></script>
    <script src="{{ asset('public/js/jquery.waypoints.min.js    ') }}"></script>
    <script src="{{ asset('public/js/owl.carousel.min.js        ') }}"></script>
    <script src="{{ asset('public/js/jquery.stellar.min.js      ') }}"></script>
    <script src="{{ asset('public/js/jquery.magnific-popup.js   ') }}"></script>
    <script src="{{ asset('public/js/YouTubePopUp.js            ') }}"></script>
    <script src="{{ asset('public/js/select2.js                 ') }}"></script>
    <script src="{{ asset('public/js/datepicker.js              ') }}"></script>
    <script src="{{ asset('public/js/smooth-scroll.min.js       ') }}"></script>
    <script src="{{ asset('public/js/custom.js                  ') }}"></script>

    {!! settings('google_search_console_code') !!}

    {!! settings('google_analytics_code') !!}
    
    {!! settings('clarity_code') !!}
    @yield('tool_scripts')
	
    @yield('scripts')
</body>
</html>