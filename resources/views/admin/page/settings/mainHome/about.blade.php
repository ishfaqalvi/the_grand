<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered about" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="about">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">First Image</label>
            <div class="col-md-9 mt-3">
                @php($home_about_first_image = $settings['home_about_first_image']) 
                {{ Form::file('home_about_first_image', ['class' => 'form-control dropify' . ($errors->has('home_about_first_image') ? ' is-invalid' : ''), $home_about_first_image ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => $home_about_first_image != '' ? asset($home_about_first_image) : '']) }}
                {!! $errors->first('home_about_first_image', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Logo size(width = 900 , height = 1200)</small>
                <input type="hidden" name="size[home_about_first_image][x]" value="900">
                <input type="hidden" name="size[home_about_first_image][y]" value="1200">
            </div>
            <label class="control-label text-end col-md-3 mt-3">Second Image</label>
            <div class="col-md-9 mt-3">
                @php($home_about_second_image = $settings['home_about_second_image']) 
                {{ Form::file('home_about_second_image', ['class' => 'form-control dropify' . ($errors->has('home_about_second_image') ? ' is-invalid' : ''), $home_about_second_image ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => $home_about_second_image != '' ? asset($home_about_second_image) : '']) }}
                {!! $errors->first('home_about_second_image', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Logo size(width = 900 , height = 1200)</small>
                <input type="hidden" name="size[home_about_second_image][x]" value="900">
                <input type="hidden" name="size[home_about_second_image][y]" value="1200">
            </div>
            <label class="control-label text-end col-md-3 mt-3">Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_about_title]', $settings['home_about_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Sub Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_about_sub_title]', $settings['home_about_sub_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label mt-3 text-end col-md-3">Contact Label</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_about_contact_label]', $settings['home_about_contact_label'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label mt-3 text-end col-md-3">Contact Number</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_about_contact_number]', $settings['home_about_contact_number'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label mt-3 text-end col-md-3">Stars</label>
            <div class="col-md-9 mt-3">
                {{ Form::number('values[home_about_stars]', $settings['home_about_stars'], ['class' => 'form-control', 'min' => '1','required']) }}
            </div>
            <label class="control-label mt-3 text-end col-md-3">Description</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[home_about_description]', $settings['home_about_description'], ['class' => 'form-control','required','id' => 'mymce']) }}
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
    $(".slider").validate({
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
    $(".about").validate({
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
    $(".branches").validate({
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
        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
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