@extends('admin.layout.app')

@section('title','Show Service')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Show Service</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Service</a></li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        <a href="{{ route('services.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Show Service</h4>
        <table class="table no-border d-flex">
            <tbody>
                <tr>
                    <td class="card-title">Image</td>
                    <td><img src="{{ url($service->image) }}" style="height: 90px; width: 150px;"></td>
                </tr>
                <tr>
                    <td class="card-title">Heading</td>
                    <td>{{ $service->heading }}</td>
                </tr>
                <tr>
                    <td class="card-title">Sub Heading</td>
                    <td>{{ $service->sub_heading }}</td>
                </tr>
                <tr>
                    <td class="card-title">Link</td>
                    <td>{{ $service->link }}</td>
                </tr>
                <tr>
                    <td class="card-title">Order</td>
                    <td>{{ $service->order }}</td>
                </tr>
                <tr>
                    <td class="card-title">Branch</td>
                    <td>{{ $service->branch?->name }}</td>
                </tr>
                <tr>
                    <td class="card-title">Status</td>
                    <td>{{ $service->status }}</td>
                </tr>
                <tr>
                    <td class="card-title">Description</td>
                    <td>{{ $service->description }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
