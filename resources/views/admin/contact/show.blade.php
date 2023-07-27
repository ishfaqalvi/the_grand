@extends('admin.layout.app')

@section('title','Show')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Contacts</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">Contacts</a></li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        <a href="{{ route('contacts.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Show') }}</h4>
        <table class="table no-border d-flex">
            <tbody>
                <tr>
                    <td class="card-title">Branch</td>
                    <td>{{ $contact->branch->name }}</td>
                </tr>
                <tr>
                    <td class="card-title">Name</td>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <td class="card-title">Email</td>
                    <td>{{ $contact->email }}</td>
                </tr>
                <tr>
                    <td class="card-title">Number</td>
                    <td>{{ $contact->number }}</td>
                </tr>
                <tr>
                    <td class="card-title">Subject</td>
                    <td>{{ $contact->subject }}</td>
                </tr>
                <tr>
                    <td class="card-title">Message</td>
                    <td>{{ $contact->message }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection