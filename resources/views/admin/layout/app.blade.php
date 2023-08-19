<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.include.head')
</head>
<body class="skin-blue fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">The Grand</p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                @include('admin.layout.include.header')
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    @include('admin.layout.include.sidebar')
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    @yield('breadcrumb')
                </div>
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
				</div>
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title">Service Panel<span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            © 2021 Admin by dazzle.lab.com
            <a href="http://dazzle.lab.com/" target="_blank">DazzleLab</a>
        </footer>
    </div>
    @include('admin.layout.include.script')

    @yield('scripts')
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            $.toast({ 
                heading: 'Success',
                text: "{{Session::get('success')}}",
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'success',
                hideAfter: 3500, 
                stack: 6
            });
        @endif
        @if(Session::has('warning'))
            $.toast({ 
                heading: 'Warning',
                text: "{{Session::get('warning')}}",
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'warning',
                hideAfter: 3500, 
                stack: 6
            });
        @endif
        @if(Session::has('info'))
            $.toast({ 
                heading: 'Info',
                text: "{{Session::get('info')}}",
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'info',
                hideAfter: 3500, 
                stack: 6
            });
        @endif
        @if(Session::has('error'))
            $.toast({ 
                heading: 'Error',
                text: "{{Session::get('error')}}",
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'error',
                hideAfter: 3500, 
                stack: 6
            });
        @endif
    </script>
</body>
</html>