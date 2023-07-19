@extends('admin.layout.app')

@section('title','Show Testimonial')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Show Testimonial</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('testimonials.index') }}">Testimonial</a></li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        <a href="{{ route('testimonials.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Show Testimonial</h4>
        <table class="table no-border d-flex">
            <tbody>
                <tr>
                    <td class="card-title">Image</td>
                    <td><img src="{{ asset($testimonial->image) }}" ></td>
                </tr>
                <tr>
                    <td class="card-title">Name</td>
                    <td>{{ $testimonial->name }}</td>
                </tr>
                <tr>
                    <td class="card-title">Message</td>
                    <td>{{ $testimonial->message }}</td>
                </tr>
                <tr>
                <tr>
                    <td class="card-title">Order</td>
                    <td>{{ $testimonial->order }}</td>
                </tr>
                
                <tr>
                    <td class="card-title">Branch</td>
                    <td>{{ $testimonial->branch->name }}</td>
                </tr>
                <tr>
                    <td class="card-title">Status</td>
                    <td>{{ $testimonial->status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection