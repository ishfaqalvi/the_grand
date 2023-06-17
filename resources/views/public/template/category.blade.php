<nav aria-label="breadcrumb">
    <ol class="breadcrumb mt-3 ms-5">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __(dynamicString('home',$language->id)) }}</a></li>
        <li class="breadcrumb-item">{{ $page->title }}</li>
    </ol>
</nav>
<!--Sticky icons-->
@include('public.layout.include.sticky_icons')

@if($page->category_type == 'Tool')
<div class="container">
    <div class="heading">
        <h1 class="text-center">{{ $page->title }}</h1>
        <p class="text-center p-3 col-lg-9">{{ $page->description }}</p>
    </div>
    <div class="col-12 mt-5">
        <div class="row gx-2 gy-2 cal-cards">
            @foreach($page->childs as $tool)
            <div class="col-md-4">
                <div class="card shadow border-0 rounded-0 pl-5">
                    <div class="card-body p-2 d-flex align-items-center">
                        <div>
                            <a href="#"><img src="{{ asset($tool->image) }}"></a>
                        </div>
                        <div class="ps-2">
                            <a href="{{ url(urlGenerate($tool->slug,$language->id)) }}">
                                <p class="inner-heading">{{ $tool->title }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> 
    </div>  
</div>
@endif

@if($page->category_type == 'Blog')
<div class="blog-header">
    <div class="container">
        <div class="row justify-content-center p-4">
            <h1 class="text-center mb-4">{{ $page->title }}</h1>
            <p class="text-center p-3 col-lg-9">{{ $page->description }}</p>
            @if($firstBlog = $page->childs()->first())
            <div class="col-lg-5 blog-container">
                <a href="{{ url(urlGenerate($firstBlog->slug,$language->id))}}">
                    <img class="img-fluid" src="{{ asset($firstBlog->image) }}"/>
                </a>
            </div>
            <div class="col-lg-5 blog-container">
                <div class="publish-date">
                    <p>{{ $firstBlog->published_at }}</p>
                </div>
                <div class="blog-title">
                    <h3><a href="{{ url(urlGenerate($firstBlog->slug,$language->id))}}">{{ $firstBlog->title }}</a></h3>
                </div>
                <div class="blog-excerpt">
                    <p>{{ $firstBlog->description }}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        @foreach($page->childs as $key => $blog)
        @if($key > 0)
        <div class="card col-lg-4">
            <div class="blog m-3">
                <a href="{{ url(urlGenerate($blog->slug,$language->id)) }}"><img class="card-img-top" src="{{ asset($blog->image) }}" alt="Card image cap"></a>
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">{{ $blog->published_at }}</small></p>
                    <h5 class="card-title">
                        <a href="{{ url(urlGenerate($blog->slug,$language->id)) }}">
                            {{ $blog->title }}
                        </a>
                    </h5>
                    <p class="card-text">{{ $blog->description }}</p>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endif

@if($page->category_type == 'Problem')
<div class="container d-flex flex-column align-items-center justify-content-center">
    <h1>{{ $page->title }}</h1>
    <p class="text-center p-3 col-lg-9">{{ $page->description }}</p>
    <div class="col-12 row integral">
        @foreach($page->childs as $problem)
        <div class="card integral-category col-lg-4">
            <a href="{{ url(urlGenerate($problem->slug,$language->id)) }}">
                <img class="card-img-top" src="{{ asset($problem->image) }}" alt="Card image cap">
            </a>
            <div class="integral-heading text-center">
                <h4 class="mb-0">
                    <a href="{{ url(urlGenerate($problem->slug,$language->id)) }}">
                        {{ $problem->title }}
                    </a>
                </h4>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif