<footer class="footer d-flex justify-content-center mt-5 p-3">
    <div class="row">
        <div class="col-lg-4 footer-logo p-5">
            <a href="{{ route('home') }}"><img src="{{ asset(settings('footer_logo')) }}"/></a>
            <p class="mt-3">{{ dynamicString('footer_description',$language->id) }}</p>
        </div>
        <div class="col-lg-2 footer-menu">
            <a class="footer-heading" href="#">{{ dynamicString('footer_heading_1',$language->id) }}</a>
            <ul class="mt-2">
                @foreach($language->moreMenus as $item)
                    <li><a href="{{ url(urlGenerate($item->url,$language->id)) }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-2 footer-menu">
            <a class="footer-heading" href="#">{{ dynamicString('footer_heading_2',$language->id) }}</a>
            <ul class="mt-2">
                @foreach($language->aboutMenus as $item)
                    <li><a href="{{ url(urlGenerate($item->url,$language->id)) }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-2 footer-menu">
            <a class="footer-heading" href="#">{{ dynamicString('footer_heading_3',$language->id) }}</a>
            <ul class="mt-2">
                @foreach($language->contactMenus as $item)
                    <li><a href="{{ url(urlGenerate($item->url,$language->id)) }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-2 d-flex flex-column align-items-center footer-menu">
            <div class="dropdown">
                <a class="btn-light dropdown-toggle footer-lang" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ $language->name }}
                </a>
                <ul class="dropdown-menu">
                    @foreach($languages as $row)
                        <li>
                            <a class="dropdown-item" href="{{ route('viewPage',[$row->code, $slug]) }}">
                                {{ $row->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <p class="mt-2">{{ dynamicString('connect_heading',$language->id) }}</p>
            <div class="social-icons d-flex mt-4">
                <a href="{{ url(settings('facebook_link')) }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="{{ url(settings('twitter_link')) }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ url(settings('instagram_link')) }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="{{ url(settings('bazigate_website_url')) }}" class="btn channel-link mt-3" target="_blank">
                <img src="{{ asset('public/images/Group 23.webp') }}"/>{{ dynamicString('footer_button',$language->id) }}
            </a>
        </div>
    </div>
</footer>
<div class="row justify-content-center align-items-center p-3">
    <a href="{{ url(settings('copyright_link')) }}" class="copy-right d-flex align-items-center justify-content-center">
        {{ dynamicString('copyright_heading',$language->id) }}
    </a>
</div>