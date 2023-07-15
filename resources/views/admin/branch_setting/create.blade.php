@extends('admin.layout.app')

@section('title','Create Branch Setting')

@section('breadcrumb')
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Create Branch Setting</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('branches.index') }}">Branch Setting</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <a href="{{ route('branch-settings.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
                <i class="fas fa-arrow-left"></i> {{ __('Back') }}
            </a>
        </div>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Create Branch</h4>
        <form method="POST" action="{{ route('branch-settings.store') }}" role="form" enctype="multipart/form-data" class="branch">
            @csrf
            @include('admin.branch_setting.form')
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(".branch").validate({
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
    });
</script>
<script type="text/javascript">
    CheckMenuType();
    function CheckMenuType(){
        var url = document.getElementById('url');
        var link = document.getElementById('link');
        var value = document.getElementById("linktype").value;
        if(value == 'Internal'){
            link.style.display='block';
            document.getElementById("url_field").removeAttribute("required");
            url.style.display='none';
        }
        else if(value == 'External'){
            url.style.display='block';
            link.style.display='none';
            document.getElementById("page_link").removeAttribute("required");
        }
        else{
            url.style.display='none';
            link.style.display='none';
        }
    }
</script>
@endsection