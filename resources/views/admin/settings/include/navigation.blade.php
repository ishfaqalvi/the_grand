<form method="POST" action="{{ route('settings.save') }}" class="form-horizontal form-bordered navigation" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="navigation">
    <input type="hidden" name="settable_type" value="Branch">
    <input type="hidden" name="settable_id" value="{{ auth()->user()->branch_id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Logo</label>
            <div class="col-md-9 mt-3">
                @php($navigation_logo = $settings['navigation_logo']) 
                {{ Form::file('navigation_logo', ['class' => 'form-control dropify' . ($errors->has('navigation_logo') ? ' is-invalid' : ''), $navigation_logo ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => $navigation_logo != '' ? asset($navigation_logo) : '']) }}
                {!! $errors->first('navigation_logo', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Logo size(width = 320 , height = 100)</small>
                <input type="hidden" name="size[navigation_logo][x]" value="320">
                <input type="hidden" name="size[navigation_logo][y]" value="100">
            </div>
            <label class="control-label text-end col-md-3 mt-3">Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[navigation_title]', $settings['navigation_title'], ['class' => 'form-control','required']) }}
                <small class="form-control-feedback"> Title navigation </small>
            </div>
            <label class="control-label text-end col-md-3 mt-3">Sub Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[navigation_sub_title]', $settings['navigation_sub_title'], ['class' => 'form-control','required']) }}
                <small class="form-control-feedback"> Sub title navigation </small>
            </div>
            <label class="control-label mt-3 text-end col-md-3">Contact Label</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[navigation_contact_lablel]', $settings['navigation_contact_lablel'], ['class' => 'form-control','required']) }}
                <small class="form-control-feedback"> Contact Label of navigation </small>
            </div>
            <label class="control-label mt-3 text-end col-md-3">Contact Number</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[navigation_contact_number]', $settings['navigation_contact_number'], ['class' => 'form-control','required']) }}
                <small class="form-control-feedback"> 855 100 4444 </small>
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