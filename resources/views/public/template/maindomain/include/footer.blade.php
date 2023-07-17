<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">About Hotel</h3>
                        <p class="footer-about-text">{{ settings($page->branch_id, 'description') }}</p>

                        <div class="footer-language"> <i class="lni ti-world"></i>
                            <select onchange="location = this.value;">
                                <option value="http://duruthemes.com/">English</option>
                                <option value="http://duruthemes.com/">German</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Explore</h3>
                        <ul class="footer-explore-list list-unstyled">
                            @foreach(footerMenus($page->branch_id) as $menu)
                                <li><a href="{{ asset($menu->url) }}">{{ $menu->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">Contact</h3>
                        <p class="footer-contact-text">{{ settings($page->branch_id, 'address') }}</p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone">
                                <span class="flaticon-call"></span> 
                                {{ settings($page->branch_id, 'phone') }}</p>
                            <p class="footer-contact-mail">{{ settings($page->branch_id, 'email') }}</p>
                        </div>
                        <div class="footer-about-social-list">
                            <a href="{{ settings($page->branch_id, 'instagram') }}"><i class="ti-instagram"></i></a>
                            <a href="{{ settings($page->branch_id, 'twitter') }}"><i class="ti-twitter"></i></a>
                            <a href="{{ settings($page->branch_id, 'youtube') }}"><i class="ti-youtube"></i></a>
                            <a href="{{ settings($page->branch_id, 'facebook') }}"><i class="ti-facebook"></i></a>
                            <a href="{{ settings($page->branch_id, 'pinterest') }}"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">{{ settings($page->branch_id, 'copyright') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>