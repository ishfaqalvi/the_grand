@extends('admin.layout.app')

@section('title','Gallery')

@section('breadcrumb')
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">{{ __('Gallery') }}</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ __('Gallery') }}</li>
            </ol>
            <a data-bs-toggle="modal" data-bs-target="#addImage" type="button" class="btn btn-info d-none d-sm-block text-white m-l-15">
                <i class="fa fa-plus-circle"></i> Upload File
            </a>
        </div>
    </div>
@endsection
@section('content')
<div class="card">
    <div class="card-body p-b-0">
        <h4 class="card-title">Gallery</h4>
        <ul class="nav nav-tabs customtab2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#image" role="tab">
                    <span class="hidden-sm-up"><i class="ti-home"></i></span>
                    <span class="hidden-xs-down">Image</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#footer" role="tab">
                    <span class="hidden-sm-up"><i class="ti-home"></i></span>
                    <span class="hidden-xs-down">Video</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active p-20" id="image" role="tabpanel">
                @include('admin.gallery.image')
            </div>
            <div class="tab-pane p-20" id="footer" role="tabpanel">
                @include('admin.gallery.video')
            </div>
        </div>
    </div>
</div>
<div id="addImage" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('galleries.store') }}" class="gallery" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Upload Media</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    @include('admin.gallery.form')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var type = $('select[name=type]');
    $(".gallery").validate({
        rules: {           
            image:          {required: function(){if (type.val() =='Image') {return true}}},
            video_thumbnail:{required: function(){if (type.val() =='Video') {return true}}},
            video_link:     {required: function(){if (type.val() =='Video') {return true}}}
        },
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
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
    });
</script>
<script>
    $(document).ready(function() {
        $("select[name=type]").change(function() {
            if ($(this).val() == 'Image') {
                $('div.imageField').show('slow');
                $('div.videoField').hide('slow');
                $('div.videoLinkField').hide('slow');
            }else if ($(this).val() == 'Video'){
                $('div.imageField').hide('slow');
                $('div.videoField').show('slow');
                $('div.videoLinkField').show('slow');
            }
        }).trigger('change');
    });
</script>
@endsection