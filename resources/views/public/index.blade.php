@extends('public.layout.app')

@section('title'){{ $page->metaTitle }}@endsection

@section('head')
    <meta name="description"content="{{ $page->metaDescription }}"/>
    <meta name="robots"     content="{{ $page->status == 'UnPublish' ? 'noindex, nofollow' : 'index, follow' }}">
    <link rel="canonical"   href   ="{{ $page->canonical}}"/>

    <!-- Open Graph general -->
    {!! $page->og_tags !!}
    <!-- Open Graph general -->
    
    <!-- Schema.org for Google -->
    {!! $page->schemas !!}
    <!-- Schema.org for Google -->
@endsection

@section('content')
    <!--
    |--------------------------------------------------------------------------
    | Page Header include here
    |--------------------------------------------------------------------------
    -->
    @include('public.layout.include.header')
    
    @if($page->template =='Home')
    <!--
    |--------------------------------------------------------------------------
    | Home page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.home')

    @elseif($page->template =='Tool')
    <!--
    |--------------------------------------------------------------------------
    | Tool page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.tool')

    @elseif($page->template =='Blog')
    <!--
    |--------------------------------------------------------------------------
    | Blog page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.blog')

    @elseif($page->template =='Problem')
    <!--
    |--------------------------------------------------------------------------
    | Problem page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.problem')

    @elseif($page->template =='Category')
    <!--
    |--------------------------------------------------------------------------
    | Category page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.category')

    @elseif($page->template =='Career')
    <!--
    |--------------------------------------------------------------------------
    | Career page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.career')

    @elseif($page->template =='Contact_us')
    <!--
    |--------------------------------------------------------------------------
    | Contact US page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.contact_us')

    @else
    <!--
    |--------------------------------------------------------------------------
    | Other all simple pages template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.simple')
    @endif 
    
    <!--
    |--------------------------------------------------------------------------
    | Page Footer include here
    |--------------------------------------------------------------------------
    -->
    @include('public.layout.include.footer')
@endsection