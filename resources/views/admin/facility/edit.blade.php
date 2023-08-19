@extends('admin.layout.app')

@section('title','Edit Facility')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Edit Facility</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('facilities.index') }}">Facility</a></li>
            <li class="breadcrumb-item active">Edit</li>
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
        <h4 class="card-title">Edit Facility</h4>
        <form method="POST" action="{{ route('facilities.update', $facility->id) }}" role="form" enctype="multipart/form-data" class="facility">
            @csrf
            {{ method_field('PATCH') }}
            @include('admin.facility.form')
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var type = $('select[name=type]');
    $(".facility").validate({
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
        rules: {
            type:{required: true},            
            icon:{required: function(){if (type.val() =='Icon') {return true}}},
            image:{required: function(){if (type.val() =='Image') {return true}}}
        }
    });
</script>
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        $('#type').on('change', function (e) {
            if (this.value == 'Icon') {
                $('div.icon').show('slow');
                $('div.image').hide('slow');
            }else if(this.value == 'Image'){
                $('div.icon').hide('slow');
                $('div.image').show('slow');
            }else{
                $('div.icon').hide('slow');
                $('div.image').hide('slow');
            }
        }).trigger('change');
    });
</script>
@endsection