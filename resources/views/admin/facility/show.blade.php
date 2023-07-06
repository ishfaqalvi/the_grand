@extends('admin.layout.app')

@section('title','Show Facility')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Show Facility</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('facilities.index') }}">Facility</a></li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        <a href="{{ route('facilities.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Show Facility</h4>
        <table class="table no-border d-flex">
            <tbody>
                <tr>
                    <td class="card-title">Icon</td>
                    <td>{{ $facility->icon }}</td>
                </tr>
                <tr>
                    <td class="card-title">Heading</td>
                    <td>{{ $facility->heading }}</td>
                </tr>
                <tr>
                    <td class="card-title">Description</td>
                    <td>{{ $facility->description }}</td>
                </tr>
                <tr>
                    <td class="card-title">Order</td>
                    <td>{{ $facility->order }}</td>
                </tr>
                <tr>
                    <td class="card-title">Status</td>
                    <td>{{ $facility->status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection