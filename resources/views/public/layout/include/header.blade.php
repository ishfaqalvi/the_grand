<header class="header">
    <nav class="container-fluid navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset(settings('header_logo')) }}" width="130px" alt="Site logo"/>
            </a>
            <button class="navbar-toggler" type="button " data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa-solid fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach($language->mainMenus as $menu)
                        @if($menu->childItems()->count() > 0)
                            <li class="nav-item dropdown menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $menu->title }}
                                </a>
                                <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                                    @foreach($menu->childItems as $item)
                                        <a class="dropdown-item" href="{{ url(urlGenerate($item->url,$language->id)) }}">{{ $item->title }}</a>
                                        <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item menu">
                                <a class="nav-link" href="{{ url(urlGenerate($menu->url,$language->id)) }}">
                                    {{ $menu->title }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <div class="right-menu d-flex">
                    <div class="dropdown lang-menu">
                        <a class="btn-light dropdown-toggle lang-list p-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $language->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach($languages as $language)
                                <li>
                                    <a class="dropdown-item" href="{{ route('viewPage',[$language->code, $slug]) }}">
                                        {{ $language->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>