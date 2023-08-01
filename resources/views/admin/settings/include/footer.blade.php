<form method="POST" action="{{ route('settings.save') }}" class="form-horizontal form-bordered" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="footer">
    <input type="hidden" name="settable_type" value="Branch">
    <input type="hidden" name="settable_id" value="{{ auth()->user()->branch_id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">First Lable</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[footer_first_lable]', $settings['footer_first_lable'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> label of footer  </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Second Lable</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[footer_second_lable]', $settings['footer_second_lable'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> second label of footer </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Third Lable</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[footer_third_lable]', $settings['footer_third_lable'], ['class' => 'form-control']) }}
            <small class="form-control-feedback"> third label of footer </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Description</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[footer_description]', $settings['footer_description'], ['class' => 'form-control','rows' => '2']) }}
                <small class="form-control-feedback"> website detail </small>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Address</label>
            <div class="col-md-9 mt-3">
                <small class="form-control-feedback">  </small>
                {{ Form::text('values[footer_address]', $settings['footer_address'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> Address </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Phone Number</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[footer_phone_number]', $settings['footer_phone_number'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> Enter Contact number </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Email</label>
            <div class="col-md-9 mt-3">
                {{ Form::email('values[footer_email]', $settings['footer_email'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> Enter email </small>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Instagram Link</label>
            <div class="col-md-9 mt-3">
                {{ Form::url('values[footer_instagram_link]', $settings['footer_instagram_link'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> https://www.instagram.com </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Twitter Link</label>
            <div class="col-md-9 mt-3">
                {{ Form::url('values[footer_twitter_link]', $settings['footer_twitter_link'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> https://www.twitter.com </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Youtube Link</label>
            <div class="col-md-9 mt-3">
                {{ Form::url('values[footer_youtube_link]', $settings['footer_youtube_link'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> https://www.youtube.com </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Facebook Link</label>
            <div class="col-md-9 mt-3">
                {{ Form::url('values[footer_facebook_link]', $settings['footer_facebook_link'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> https://www.facebook.com </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Pinterest Link</label>
            <div class="col-md-9 mt-3">
                {{ Form::url('values[footer_pinterest_link]', $settings['footer_pinterest_link'], ['class' => 'form-control']) }}
                <small class="form-control-feedback"> https://www.pinterest.com </small>
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