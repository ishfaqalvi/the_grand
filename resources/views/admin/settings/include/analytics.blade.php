<form method="POST" action="{{ route('settings.save') }}" class="form-horizontal form-bordered" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="analytics">
    <input type="hidden" name="settable_type" value="Branch">
    <input type="hidden" name="settable_id" value="{{ auth()->user()->branch_id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Googel Search Console Code</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[google_search_console_code]', settings('google_search_console_code'), ['class' => 'form-control','rows' => '4']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Footer</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[google_analytics_code]',  settings('google_analytics_code'), ['class' => 'form-control','rows' => '4']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Copyright</label>
            <div class="col-md-9 mt-3">
                {{ Form::textarea('values[clarity_code]', settings('clarity_code'), ['class' => 'form-control','rows' => '4']) }}
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