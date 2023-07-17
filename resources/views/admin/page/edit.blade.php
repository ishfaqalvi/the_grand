@extends('admin.layout.app')

@section('title','Update Page')

@section('breadcrumb')
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Edit Page</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Page</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <a href="{{ route('pages.index') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
                <i class="fas fa-arrow-left"></i> {{ __('Back') }}
            </a>
        </div>
    </div>
@endsection

@section('content')
<div class="card wizard-content">
    <div class="card-body">
        <h4 class="card-title">Update Home Page with Multistep</h4>
        <form method="POST" action="{{ route('pages.update', $page->id) }}" class="page" role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            @include('admin.page.form')
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        // To generate a auto slug from title field
        $("input[name=title]").bind('keyup change input', function() {
            let val = $(this).val().toLowerCase();
            $('input[name=slug]').val(val.replaceAll(" ", "-"));
        });
    });
</script>
<script>
    var _token = $("input[name='_token']").val();
    var id = {{ $page->id }};
    $(".page").validate({
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
            slug:{
                "remote":
                {
                    url: "{{ route('pages.check_slug') }}",
                    type: "POST",
                    data: {
                        _token:_token,
                        id:id,
                        branch_id: function() {
                            return $("select[name='branch_id']").find(":selected").val();
                        },
                        slug: function() {
                            return $("input[name='slug']").val();
                        }
                    },
                }
            }
        },
        messages:{
            slug:{
                required: "Please enter a unique slug for this page.",
                remote: jQuery.validator.format("{0} is already taken.")
            }
        },
    })
</script>
@endsection