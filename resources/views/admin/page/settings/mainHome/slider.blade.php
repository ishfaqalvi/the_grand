<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered slider" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="slider">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Type</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_slider_type]',['Image' => 'Image','Video' => 'Video'], $settings['home_slider_type'] != '' ? $settings['home_slider_type'] : 'Image', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Auto Play</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_slider_autoPlay]',['Yes' => 'Yes','No' => 'No'], $settings['home_slider_autoPlay'] != '' ? $settings['home_slider_autoPlay'] : 'Yes', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Speed</label>
            <div class="col-md-9 mt-3">
                {{ Form::number('values[home_slider_speed]', $settings['home_slider_speed'], ['class' => 'form-control','required','min' => '5']) }}
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
