<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        @foreach(sliderList($page->branch_id) as $key => $slide)
        <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ asset($slide->image) }}">
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
                            <h4>{{ $slide->sub_title }}</h4>
                            <h1>{{ $slide->title }}</h1>
                            <div class="butn-light mt-30 mb-30">
                                <a href="{{ $slide->link }}" data-scroll-nav="{{ ++$key }}">
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
            <div class="col-md-6">
                <a href="image_gallery.html">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('public/img/rooms/4.jpg') }}" alt=""> </div> <span class="category">>Main Branch</span>
                        <div class="con">
                            <h5>Ballroom</h5>
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
            <div class="col-md-6">
                <a href="video_gallery.html">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('public/img/rooms/7.jpg') }}" alt=""> </div> <span class="category">Second Branch</span>
                        <div class="con">
                            <h5>Mehndi</h5>
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
            <div class="col-md-6">
                <a href="image_gallery.html">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('public/img/rooms/4.jpg') }}" alt=""> </div> <span class="category">>Thired Branch</span>
                        <div class="con">
                            <h5>Baraat</h5>
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
            <div class="col-md-6">
                <a href="video_gallery.html">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('public/img/rooms/7.jpg') }}" alt=""> </div> <span class="category">Forth Branch</span>
                        <div class="con">
                            <h5>Waleema</h5>
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
        </div>
    </div>
</section>
<!-- Services -->
<section class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Our Services</div>
                <div class="section-title">Hotel Services</div>
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
                                <p>{{ $service->description }}</p>
                                <div class="butn-dark"> <a href="{{ asset($service->link) }}"><span>Learn More</span></a> </div>
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
                                <p>{{ $service->description }}</p>
                                <div class="butn-dark"> <a href="{{ asset($service->link) }}"><span>Learn More</span></a> </div>
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
<!-- Testiominals -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset('public/img/slider/2.jpg') }}" data-overlay-dark="3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonials-box">
                        <div class="head-box">
                            <h6>Testimonials</h6>
                            <h4>What Client's Say?</h4>
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
                                            <i class="star-rating"></i>
                                            <i class="star-rating"></i>
                                            <i class="star-rating"></i>
                                            <i class="star-rating"></i>
                                            <i class="star-rating"></i>
                                        </span>
                                        <h6>{{ $testimonial->name }}</h6> <span>Guest review</span>
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
                            <h6>Rooms & Suites</h6>
                            <h4>Hotel Booking Form</h4>
                        </div>
                        <div class="booking-inner clearfix">
                            <form action="rooms2.html" class="form1 clearfix">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-secondary">Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.</p>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-form1-submit mt-15">Check Availability</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Facilties -->
<section class="facilties section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Our Services</div>
                <div class="section-title">Hotel Facilities</div>
            </div>
        </div>
        <div class="row">
            @foreach($page->facilities as $key => $facility)
            <div class="col-md-4">
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
<!-- News -->
<section class="news section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle"><span>Hotel Blog</span></div>
                <div class="section-title">Our News</div>
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
                                    <span>Dec</span> <i>02</i>
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
<!-- Testiominals -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset('public/img/slider/2.jpg') }}" data-overlay-dark="3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="testimonials-box">
                        <div class="head-box">
                            <h6>Testimonials</h6>
                            <h4>What Client's Say?</h4>
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
                                            <i class="star-rating"></i>
                                            <i class="star-rating"></i>
                                            <i class="star-rating"></i>
                                            <i class="star-rating"></i>
                                            <i class="star-rating"></i>
                                        </span>
                                        <h6>{{ $testimonial->name }}</h6> <span>Guest review</span>
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
<!-- Pricing -->
<section class="pricing section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="section-subtitle"><span>Best Prices</span></div>
                <div class="section-title">Contact Us</div>
                <p class="color-2">The best prices for your relaxing vacation. The utanislen quam nestibulum ac quame odion elementum sceisue the aucan.</p>
                <p class="color-2">Orci varius natoque penatibus et magnis disney parturient monte nascete ridiculus mus nellen etesque habitant morbine.</p>
                <a href="contact.html">
                    <button type="submit" class="btn-form1-submit mt-15 px-3">Contacty us</button>
                </a>
            </div>
            <div class="col-md-8">
                <div class="owl-carousel owl-theme">
                    <div class="pricing-card">
                        <img src="{{ asset('public/img/pricing/1.jpg') }}" alt="">
                        <div class="desc">
                            <div class="name">Call Us</div>
                            <p class="text-secondary">Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.</p>
                            <div class="reservations">
                                <div class="icon"><span class="flaticon-call"></span></div>
                                <div class="text">
                                    <p class="color-2">For information</p> <a href="tel:855-100-4444">855 100 4444</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-card">
                        <img src="{{ asset('public/img/pricing/2.jpg') }}" alt="">
                        <div class="desc">
                            <div class="name">Reservation</div>
                            <p class="text-secondary">Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.</p>
                            <div class="col-md-12" style="text-align: center;">
                                <a href="" class="btn-form1-submit">Check Availability</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>