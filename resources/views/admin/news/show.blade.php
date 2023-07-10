@extends('admin.layout.app')

@section('title','Show News')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Show News</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        <a href="{{ route('news.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Show News</h4>
        <table class="table no-border d-flex">
            <tbody>
                <tr>
                    <td class="card-title">Image</td>
                    <td><img src="{{ url('upload/images/news/'.$news->image) }}" style="height: 90px; width: 150px;"></td>
                </tr>
                <tr>
                    <td class="card-title">Heading</td>
                    <td>{{ $news->heading }}</td>
                </tr>
                <tr>
                    <td class="card-title">Sub Heading</td>
                    <td>{{ $news->sub_heading }}</td>
                </tr>
                <tr>
                    <td class="card-title">Date</td>
                    <td>{{ $news->date }}</td>
                </tr>
                <tr>
                    <td class="card-title">Url</td>
                    <td>{{ $news->url }}</td>
                </tr>
                <tr>
                    <td class="card-title">Description</td>
                    <td>{{ $news->description }}</td>
                </tr>
                <tr>
                    <td class="card-title">Order</td>
                    <td>{{ $news->order }}</td>
                </tr>
                
                <tr>
                    <td class="card-title">Branch</td>
                    <td>{{ $news->branch->name }}</td>
                </tr>
                <tr>
                    <td class="card-title">Status</td>
                    <td>{{ $news->status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection