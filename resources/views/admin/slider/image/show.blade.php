@extends('admin.layout.app')

@section('title')
    {{ $slider->title ?? "Show Slider" }}
@endsection

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Show Slider</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('sliders.image.index') }}">Sliders</a></li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        <a href="{{ route('sliders.image.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Show Slider</h4>
        <div class="row">
            <div class="form-group col-md-12">
                <strong>Title:</strong>
                {{ $slider->title }}
            </div>
            <div class="form-group col-md-12">
                <strong>Sub Title:</strong>
                {{ $slider->sub_title }}
            </div>
            <div class="form-group col-md-12">
                <strong>Linktype:</strong>
                {{ $slider->linktype }}
            </div>
            <div class="form-group col-md-12">
                <strong>Link:</strong>
                {{ $slider->link }}
            </div>
            <div class="form-group col-md-12">
                <strong>Order:</strong>
                {{ $slider->order }}
            </div>
            <div class="form-group col-md-12">
                <strong>Branch:</strong>
                {{ $slider->branch_id }}
            </div>
            <div class="form-group col-md-12">
                <strong>Status:</strong>
                {{ $slider->status }}
            </div>
            <div class="form-group col-md-12">
                <strong>Image:</strong>
                <img src="{{ url($slider->image) }}" width="100%">
            </div>
        </div>  
    </div>
</div>
@endsection