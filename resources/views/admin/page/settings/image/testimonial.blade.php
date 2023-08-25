<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered testimonial" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="testimonial">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Background Image</label>
            <div class="col-md-9 mt-3">
                @php($img_testimonial_bg_image = $settings['img_testimonial_bg_image']) 
                {{ Form::file('img_testimonial_bg_image', ['class' => 'form-control dropify' . ($errors->has('img_testimonial_bg_image') ? ' is-invalid' : ''), $img_testimonial_bg_image ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => $img_testimonial_bg_image != '' ? asset($img_testimonial_bg_image) : '']) }}
                {!! $errors->first('img_testimonial_bg_image', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Logo size(width = 1920 , height = 1200)</small>
                <input type="hidden" name="size[img_testimonial_bg_image][x]" value="1920">
                <input type="hidden" name="size[img_testimonial_bg_image][y]" value="1200">
            </div>
            <label class="control-label text-end col-md-3 mt-3">Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[img_testimonial_title]', $settings['img_testimonial_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Sub Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[img_testimonial_sub_title]', $settings['img_testimonial_sub_title'], ['class' => 'form-control','required']) }}
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