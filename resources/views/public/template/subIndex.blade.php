@extends('public.layout.app')

@section('title'){{$page->metaTitle ?? 'The Cappa Luxury Hotel'}}@endsection

@section('head')
    <meta name="description"content="{{ $page->metaDescription }}"/>
    <meta name="robots"     content="{{ $page->index == 'No' ? 'noindex, nofollow' : 'index, follow' }}">
    <link rel ="stylesheet" href   ="{{ asset('public/css/test.css') }}" />

    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
        
        .tab-button {
            cursor: pointer;
        }
    </style>
    
    <!-- Open Graph general -->
    {!! $page->og_tags !!}
    <!-- Open Graph general -->
    
    <!-- Schema.org for Google -->
    {!! $page->schemas !!}
    <!-- Schema.org for Google -->
@endsection

@section('content')
    
    @if($page->template =='Home')
    <!--
    |--------------------------------------------------------------------------
    | Home page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.subdomain.home')

    @elseif($page->template =='Image Gallery')
    <!--
    |--------------------------------------------------------------------------
    | Image Gallery page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.subdomain.imageGallery')

    @elseif($page->template =='Video Gallery')
    <!--
    |--------------------------------------------------------------------------
    | Video Gallery page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.subdomain.videoGallery')
    <!--
    |--------------------------------------------------------------------------
    | FAQS page template include here
    |--------------------------------------------------------------------------
    -->
    @elseif($page->template =='FAQS')
    
    @include('public.template.subdomain.faq')    
    @else
    <!--
    |--------------------------------------------------------------------------
    | Contact US page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.subdomain.contact')
    @endif
@endsection