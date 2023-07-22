<form method="POST" action="{{ route('settings.save') }}" class="form-horizontal form-bordered" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="copyright">
    <input type="hidden" name="settable_type" value="Branch">
    <input type="hidden" name="settable_id" value="{{ auth()->user()->branch_id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Text</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[copyright_text]', $settings['copyright_text'], ['class' => 'form-control']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Link Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[copyright_link_title]', $settings['copyright_link_title'], ['class' => 'form-control']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Link</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[copyright_link]', $settings['copyright_link'], ['class' => 'form-control']) }}
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="offset-sm-3 col-md-9 mt-3">
                        <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Submit</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>