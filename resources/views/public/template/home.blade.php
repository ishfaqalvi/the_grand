<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        @foreach(sliderList() as $key => $slider)
        <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ asset($slider->image) }}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <span>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                            </span>
                            <h4>{{ $slider->sub_title }}</h4>
                            <h1>{{ $slider->title }}</h1>
                            <div class="butn-light mt-30 mb-30">
                                <a href="{{ $slider->link }}" data-scroll-nav="{{ ++$key }}">
                                    <span>Rooms & Suites</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</header>
<!-- About -->
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <div class="section-subtitle">The Cappa Luxury Hotel</div>
                <div class="section-title">Enjoy a Luxury Experience</div>
                <p>Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the pellentesque velit. Donec id velit ac arcu posuere blane.</p>
                <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.</p>
                <!-- call -->
                <div class="reservations">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>Reservation</p> <a href="tel:855-100-4444">855 100 4444</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                <img src="{{ asset('public/img/rooms/8.jpg') }}" alt="" class="mt-90 mb-30">
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                <img src="{{ asset('public/img/rooms/2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Rooms -->
<section class="rooms1 section-padding bg-darkblack" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">The Cappa Luxury Hotel</div>
                <div class="section-title">Rooms & Suites</div>
            </div>
        </div>
        <div class="row">
            @foreach(branchList() as $branch)
            <div class="col-md-6">
                <a href="{{ $branch->url == '/' ? route('home') : route('subdomain', $branch->url) }}">
                    <div class="item">
                        <div class="position-re o-hidden">
                            <img src="{{ asset($branch->thumbnail) }}" alt="">
                        </div>
                        <span class="category">Main Branch</span>
                        <div class="con">
                            <h5>{{ $branch->name }}</h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7"></div>
                                <div class="col col-md-5 text-end">
                                    <div class="permalink">Details <i class="ti-arrow-right"></i></div>
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
