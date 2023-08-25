<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered category" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="category">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_category_title]', $settings['home_category_title'], ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Sub Title</label>
            <div class="col-md-9 mt-3">
                {{ Form::text('values[home_category_sub_title]', $settings['home_category_sub_title'], ['class' => 'form-control','required']) }}
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