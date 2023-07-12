@extends('public.layout.app')

@section('title')
    Page Not Found
@endsection

@section('content')
    <!--
    |--------------------------------------------------------------------------
    | Page Header include here
    |--------------------------------------------------------------------------
    -->@include('public.layout.include.header')
    
    <!--
    |--------------------------------------------------------------------------
    | Page Content Here
    |--------------------------------------------------------------------------
    -->
    
    <section class="comming section-padding">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>404</h1>
                        <h2>Not Found 404</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-6 offset-md-3 text-center">
                        <p>The page you are looking for was moved, removed, renamed or never existed.</p>
                        <form>
                            <input type="text" name="search" placeholder="Search" required>
                            <button>Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection