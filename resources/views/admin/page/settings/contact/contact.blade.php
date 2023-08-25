<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered contact" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="contact">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_contactUs_title]', $settings['contact_contactUs_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Phone Lable</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_contactUs_phone_label]', $settings['contact_contactUs_phone_label'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Phone Number</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_contactUs_phone_number]', $settings['contact_contactUs_phone_number'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Email Label</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_contactUs_email_label]', $settings['contact_contactUs_email_label'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Email</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_contactUs_email]', $settings['contact_contactUs_email'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Address Label</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_contactUs_address_label]', $settings['contact_contactUs_address_label'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Address</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_contactUs_address]', $settings['contact_contactUs_address'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Description</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[contact_contactUs_desc]', $settings['contact_contactUs_desc'], ['class' => 'form-control','required','rows' => '3','id'=>'contact_contactUs_desc']) }}
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