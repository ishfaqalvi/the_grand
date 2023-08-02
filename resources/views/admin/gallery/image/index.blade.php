@extends('admin.layout.app')

@section('title','Image Gallery')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">{{ __('Image Gallery') }}</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">{{ __('Image Gallery') }}</li>
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
        <h4 class="card-title">Image Gallery</h4>
        <div class="row el-element-overlay">
            @foreach ($images as $key => $image)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <img src="{{ asset('upload/images/gallery/images/medium/'.$image->image) }}" style="height: 200px !important;"alt="user"/>
                                <div class="el-overlay">
                                    <ul class="el-info">
                                        <li>
                                            <a class="btn default btn-outline image-popup-vertical-fit" href="{{ asset('upload/images/gallery/images/original/'.$image->image) }}">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="modal" data-bs-target="#editImage{{ $key }}" type="button" class="btn default btn-outline" href="#">
                                                <i class="icons-Edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('gallery.destroy',$image->id) }}" method="POST" id="delete_{{ $image->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="{{ route('gallery.destroy', $image->id) }}" class="btn default btn-outline sa-confirm" onclick="event.preventDefault(); document.getElementById('delete_'+{{ $image->id }}).submit();">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="box-title">{{ $image->branch->name }}</h4>
                                <p>{{ $image->category->title }}</p>
                                <strong> Order: {{$image->order}}</strong>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.gallery.image.edit')
            @endforeach
        </div>
    </div>
</div>
@include('admin.gallery.image.create')
@endsection

@section('scripts')
<script>
    var type = $('select[name=type]');
    $(".gallery").validate({
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
@endsection