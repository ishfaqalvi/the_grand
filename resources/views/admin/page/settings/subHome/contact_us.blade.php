<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered contact_us" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="contact_us">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_title]', $settings['home_contact_us_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Sub Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_sub_title]', $settings['home_contact_us_sub_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Button Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_btn_title]', $settings['home_contact_us_btn_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Button Url</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_btn_url]', $settings['home_contact_us_btn_url'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Description</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[home_contact_us_desc]', $settings['home_contact_us_desc'], ['class' => 'form-control','required','rows' => '3']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">First Card Thumbnail</label>
            <div class="col-md-9 mt-3">
                @php($home_contact_us_card1_image = $settings['home_contact_us_card1_image']) 
                {{ Form::file('home_contact_us_card1_image', ['class' => 'form-control dropify' . ($errors->has('home_contact_us_card1_image') ? ' is-invalid' : ''), $home_contact_us_card1_image ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => $home_contact_us_card1_image != '' ? asset($home_contact_us_card1_image) : '']) }}
                {!! $errors->first('home_contact_us_card1_image', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Logo size(width = 353 , height = 202)</small>
                <input type="hidden" name="size[home_contact_us_card1_image][x]" value="353">
                <input type="hidden" name="size[home_contact_us_card1_image][y]" value="202">
            </div>
            <label class="control-label text-end col-md-3 mt-3">First Card Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_card1_title]', $settings['home_contact_us_card1_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">First Card Phone Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_card1_phone_title]', $settings['home_contact_us_card1_phone_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">First Card Phone Number</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_card1_phone]', $settings['home_contact_us_card1_phone'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">First Card Description</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[home_contact_us_card1_desc]', $settings['home_contact_us_card1_desc'], ['class' => 'form-control','required','rows' => '3']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Second Card Thumbnail</label>
            <div class="col-md-9 mt-3">
                @php($home_contact_us_card2_image = $settings['home_contact_us_card2_image']) 
                {{ Form::file('home_contact_us_card2_image', ['class' => 'form-control dropify' . ($errors->has('home_contact_us_card2_image') ? ' is-invalid' : ''), $home_contact_us_card2_image ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => $home_contact_us_card2_image != '' ? asset($home_contact_us_card2_image) : '']) }}
                {!! $errors->first('home_contact_us_card2_image', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Logo size(width = 353 , height = 202)</small>
                <input type="hidden" name="size[home_contact_us_card2_image][x]" value="353">
                <input type="hidden" name="size[home_contact_us_card2_image][y]" value="202">
            </div>
            <label class="control-label text-end col-md-3 mt-3">Second Card Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_card2_title]', $settings['home_contact_us_card2_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Second Card Button Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_card2_btn_title]', $settings['home_contact_us_card2_btn_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Second Card Button Url</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_contact_us_card2_btn_url]', $settings['home_contact_us_card2_btn_url'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Second Card Description</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[home_contact_us_card2_desc]', $settings['home_contact_us_card2_desc'], ['class' => 'form-control','required','rows' => '3']) }}
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
    $(".contact_us").validate({
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
@endsection