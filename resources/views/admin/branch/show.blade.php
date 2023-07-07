@extends('layouts.app')

@section('template_title')
    {{ $branch->name ?? "{{ __('Show') Branch" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Branch</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('branches.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $branch->name }}
                        </div>
                        <div class="form-group">
                            <strong>Prefix:</strong>
                            {{ $branch->prefix }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $branch->image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
