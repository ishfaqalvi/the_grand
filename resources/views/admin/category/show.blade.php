@extends('admin.layout.app')

@section('title','Show Category')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Show Category</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Category</a></li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        <a href="{{ route('categories.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Show Category</h4>
        <table class="table no-border d-flex">
            <tbody>
                <tr>
                    <td class="card-title">Image</td>
                    <td><img src="{{ url($category->image) }}" style="height: 90px; width: 150px;"></td>
                </tr>
                <tr>
                    <td class="card-title">Title</td>
                    <td>{{ $category->title }}</td>
                </tr>
                <tr>
                    <td class="card-title">Label</td>
                    <td>{{ $category->label }}</td>
                </tr>
                <tr>
                    <td class="card-title">Image Page Slug</td>
                    <td>{{ $category->image_link }}</td>
                </tr>
                <tr>
                    <td class="card-title">Image Link Title</td>
                    <td>{{ $category->image_link_title }}</td>
                </tr>
                <tr>
                    <td class="card-title">Video Page Slug</td>
                    <td>{{ $category->video_link }}</td>
                </tr>
                <tr>
                    <td class="card-title">Video Link Title</td>
                    <td>{{ $category->video_link_title }}</td>
                </tr>
                <tr>
                    <td class="card-title">Order</td>
                    <td>{{ $category->order }}</td>
                </tr>
                <tr>
                    <td class="card-title">Branch</td>
                    <td>{{ $category->branch->name }}</td>
                </tr>
                <tr>
                    <td class="card-title">Status</td>
                    <td>{{ $category->status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection