<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered sections" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="sections">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Page Loader</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_sections_pageloader]',['Show' => 'Show','Hide' => 'Hide'], $settings['home_sections_pageloader'] != '' ? $settings['home_sections_pageloader'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Page Scroll Progress</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_sections_scrollprogress]',['Show' => 'Show','Hide' => 'Hide'], $settings['home_sections_scrollprogress'] != '' ? $settings['home_sections_scrollprogress'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Navigation</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_sections_navigation]',['Show' => 'Show','Hide' => 'Hide'], $settings['home_sections_navigation'] != '' ? $settings['home_sections_navigation'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Slider</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_sections_slider]',['Show' => 'Show','Hide' => 'Hide'], $settings['home_sections_slider'] != '' ? $settings['home_sections_slider'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">About</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_sections_about]',['Show' => 'Show','Hide' => 'Hide'], $settings['home_sections_about'] != '' ? $settings['home_sections_about'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Branches</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_sections_branches]',['Show' => 'Show','Hide' => 'Hide'], $settings['home_sections_branches'] != '' ? $settings['home_sections_branches'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Footer</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_sections_footer]',['Show' => 'Show','Hide' => 'Hide'], $settings['home_sections_footer'] != '' ? $settings['home_sections_footer'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Copyright</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[home_sections_copyright]',['Show' => 'Show','Hide' => 'Hide'], $settings['home_sections_copyright'] != '' ? $settings['home_sections_copyright'] : 'Show', ['class' => 'form-control form-select','required']) }}
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