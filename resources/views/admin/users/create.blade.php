@extends('admin.layout.app')

@section('title','Create User')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Create User</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">User</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <a href="{{ route('users.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fas fa-arrow-left"></i> {{ __('Back') }} 
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Create User</h4>
        @if(count(branches())> 0)
        <form method="POST" action="{{ route('users.store') }}" class="user" role="form" enctype="multipart/form-data">
            @csrf
            @include('admin.users.form')
        </form>
        @else
        <div class="alert alert-info">Opps! Their is no branch available. So You can first add a new <a href="{{ route('branches.create') }}">Branch</a> and then create user. </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
    var _token = $("input[name='_token']").val();
    $(".user").validate({
        errorClass: "text-danger",
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
            $(element).parent().addClass('has-danger');
            $(element).addClass('form-control-danger');
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
            $(element).parent().removeClass('has-danger');
            $(element).removeClass('form-control-danger');
            $(element).parent().addClass('has-success');
            $(element).addClass('form-control-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element)
        },
        rules:{
            password: {
                required: true,
                minlength:8,
                maxlength:15
            },    
            confirm_password:{
                required: true,
                equalTo: "#password"
            },
            email:{
                "remote":
                {
                    url: "{{ route('user.checkEmail') }}",
                    type: "POST",
                    data: {
                        _token:_token,
                        email: function() {
                            return $("input[name='email']").val();
                        }
                    },
                }
            }
        },
        messages:{
            email:{
                required: "Please enter a valid email address.",
                remote: jQuery.validator.format("{0} is already exist.")
            }
        }
    });
</script>
@endsection