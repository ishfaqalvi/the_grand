@extends('layouts.app')

@section('template_title')
    {{ $question->name ?? "{{ __('Show') Question" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Question</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('questions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Branch Id:</strong>
                            {{ $question->branch_id }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $question->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $question->description }}
                        </div>
                        <div class="form-group">
                            <strong>Order:</strong>
                            {{ $question->order }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $question->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
