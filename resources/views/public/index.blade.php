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

    @elseif($page->template =='Image')
    <!--
    |--------------------------------------------------------------------------
    | Tool page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.tool')

    @elseif($page->template =='Video')
    <!--
    |--------------------------------------------------------------------------
    | Blog page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.blog')

    @elseif($page->template =='FAQs')
    
    @include('public.template.blog')    
    @else
    <!--
    |--------------------------------------------------------------------------
    | Contact US page template include here
    |--------------------------------------------------------------------------
    -->
    @include('public.template.contact_us')
    @endif 
    
    <!--
    |--------------------------------------------------------------------------
    | Page Footer include here
    |--------------------------------------------------------------------------
    -->
    @include('public.layout.include.footer')
@endsection