<header class="cappa-header">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-6 col-md-6 cappa-logo-wrap">
                <a href="index.html" class="cappa-logo"><img src="{{ asset(settings($page->branch_id, 'logo')) }}" alt=""></a>
            </div>
            <!-- Menu Burger -->
            <div class="col-6 col-md-6 text-right cappa-wrap-burger-wrap"> <a href="#" class="cappa-nav-toggle cappa-js-cappa-nav-toggle"><i></i></a> </div>
        </div>
    </div>
</header>
<div class="cappa-wrap">
    <div class="cappa-wrap-inner rooms1">
        <nav class="cappa-menu">          
            <ul>
                <li>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-subtitle">The Cappa Luxury Hotel</div>
                            <div class="section-title">Rooms & Suites</div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach(branchList() as $branch)
                        <div class="col-md-12">
                            <a href="bradford.html">
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ asset($branch->thumbnail) }}" alt=""> </div> 
                                    <span class="category">{{ $branch->type }}</span>
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
                </li>
            </ul>
        </nav>
        <div class="cappa-menu-footer">
            <div class="reservation">
                <a href="tel:{{ settings($page->branch_id, 'phone') }}">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="call">Reservation<br><span>{{ settings($page->branch_id, 'phone') }}</span></div>
                </a>
            </div>
        </div>
    </div>
</div>