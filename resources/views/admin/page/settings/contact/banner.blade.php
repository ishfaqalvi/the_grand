<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered banner" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="banner">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Background Image</label>
            <div class="col-md-9 mt-3">
                @php($contact_banner_bg_image = $settings['contact_banner_bg_image']) 
                {{ Form::file('contact_banner_bg_image', ['class' => 'form-control dropify' . ($errors->has('contact_banner_bg_image') ? ' is-invalid' : ''), $contact_banner_bg_image ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => $contact_banner_bg_image != '' ? asset($contact_banner_bg_image) : '']) }}
                {!! $errors->first('contact_banner_bg_image', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Logo size(width = 1920 , height = 1200)</small>
                <input type="hidden" name="size[contact_banner_bg_image][x]" value="1920">
                <input type="hidden" name="size[contact_banner_bg_image][y]" value="1200">
            </div>
            <label class="control-label text-end col-md-3 mt-3">Heading</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_banner_heading]', $settings['contact_banner_heading'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Sub Heading</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_banner_sub_heading]', $settings['contact_banner_sub_heading'], ['class' => 'form-control','required']) }}
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="offset-sm-3 col-md-9">
                        <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Submit</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@section('scripts')
<script>
    $(".banner").validate({
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
        if ($("#contact_contactUs_desc").length > 0) {
            tinymce.init({
                selector: "textarea#contact_contactUs_desc",
                theme: "modern",
                height: 150,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            });
        }
        if ($("#contact_booking_card_desc").length > 0) {
            tinymce.init({
                selector: "textarea#contact_booking_card_desc",
                theme: "modern",
                height: 150,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            });
        }
    });
</script>
@endsection