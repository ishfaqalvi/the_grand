@extends('admin.layout.app')

@section('title','Show Quiz')

@section('breadcrumb')
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Show Quiz</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('quizzes.index') }}">Quiz</a></li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
            <a href="{{ route('quizzes.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
                <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
            </a>
        </div>
    </div>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Show Quiz</h4>
        <div class="card-body">
            <div class="form-group">
                <strong>Topic:</strong>
                {{ $quiz->topic->title }}
            </div>
            <div class="form-group">
                <strong>Quiz:</strong>
                {{ $quiz->title }}
            </div>
        </div>
    </div>
</div>
@endsection
