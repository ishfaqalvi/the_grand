@extends('admin.layout.app')

@section('title')
    {{ $question->title ?? "{{ __('Show') Question" }}
@endsection

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Show Question</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('questions.index') }}">Question</a></li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        <a href="{{ route('questions.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Show Question</h4>
        <table class="table no-border d-flex">
            <tbody>
                <tr>
                    <td class="card-title">Title</td>
                    <td>{{ $question->title }}</td>
                </tr>
                <tr>
                    <td class="card-title">Order</td>
                    <td>{{ $question->order }}</td>
                </tr>
                <tr>
                    <td class="card-title">Branch</td>
                    <td>{{ $question->branch->name }}</td>
                </tr>
                <tr>
                    <td class="card-title">Status</td>
                    <td>{{ $question->status }}</td>
                </tr>
                <tr>
                    <td class="card-title">Description</td>
                    <td>{{ $question->description }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
