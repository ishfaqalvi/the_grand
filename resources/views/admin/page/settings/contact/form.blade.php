<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered form" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="form">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_form_title]', $settings['contact_form_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Button Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_form_btn_title]', $settings['contact_form_btn_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Name Input Placeholder</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_form_palceholder_name]', $settings['contact_form_palceholder_name'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Email Input Placeholder</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_form_palceholder_email]', $settings['contact_form_palceholder_email'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Phone Input Placeholder</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_form_palceholder_number]', $settings['contact_form_palceholder_number'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Subject Input Placeholder</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_form_palceholder_subject]', $settings['contact_form_palceholder_subject'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Message Input Placeholder</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_form_palceholder_message]', $settings['contact_form_palceholder_message'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">On Submit Message</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[contact_form_return_message]', $settings['contact_form_return_message'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Email Thanku Message</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[contact_form_email_thanku_message]', $settings['contact_form_email_thanku_message'], ['class' => 'form-control','required','rows'=>'2']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Email Processing Time Message</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[contact_form_email_processing_time_message]', $settings['contact_form_email_processing_time_message'], ['class' => 'form-control','required','rows'=>'2']) }}
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