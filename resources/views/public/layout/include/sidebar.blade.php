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
                                    <div class="position-re o-hidden"> <img src="{{ asset($branch->image) }}" alt=""> </div> 
                                    <span class="category">Main Branch</span>
                                    <div class="con">
                                        <!-- <h6><a href="room-details.html">300$ / Night</a></h6> -->
                                        <h5>{{ $branch->name }}</h5>
                                        <div class="line"></div>
                                        <div class="row facilities">
                                            <div class="col col-md-7">
                                                <!-- <ul>
                                                    <li><i class="flaticon-bed"></i></li>
                                                    <li><i class="flaticon-bath"></i></li>
                                                    <li><i class="flaticon-breakfast"></i></li>
                                                    <li><i class="flaticon-towel"></i></li>
                                                </ul> -->
                                            </div>
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
                <a href="tel:8551004444">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="call">Reservation<br><span>855 100 4444</span></div>
                </a>
            </div>
        </div>
    </div>
</div>