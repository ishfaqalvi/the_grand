<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered sections" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="sections">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Page Loader</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[video_sections_pageloader]',['Show' => 'Show','Hide' => 'Hide'], $settings['video_sections_pageloader'] != '' ? $settings['video_sections_pageloader'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Page Scroll Progress</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[video_sections_scrollprogress]',['Show' => 'Show','Hide' => 'Hide'], $settings['video_sections_scrollprogress'] != '' ? $settings['video_sections_scrollprogress'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Navigation</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[video_sections_navigation]',['Show' => 'Show','Hide' => 'Hide'], $settings['video_sections_navigation'] != '' ? $settings['video_sections_navigation'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Banner</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[video_sections_banner]',['Show' => 'Show','Hide' => 'Hide'], $settings['video_sections_banner'] != '' ? $settings['video_sections_banner'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Questions</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[video_sections_videos]',['Show' => 'Show','Hide' => 'Hide'], $settings['video_sections_videos'] != '' ? $settings['video_sections_videos'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Testimonial</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[video_sections_testimonial]',['Show' => 'Show','Hide' => 'Hide'], $settings['video_sections_testimonial'] != '' ? $settings['video_sections_testimonial'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Contact Us</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[video_sections_contact_us]',['Show' => 'Show','Hide' => 'Hide'], $settings['video_sections_contact_us'] != '' ? $settings['video_sections_contact_us'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Footer</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[video_sections_footer]',['Show' => 'Show','Hide' => 'Hide'], $settings['video_sections_footer'] != '' ? $settings['video_sections_footer'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Copyright</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[video_sections_copyright]',['Show' => 'Show','Hide' => 'Hide'], $settings['video_sections_copyright'] != '' ? $settings['video_sections_copyright'] : 'Show', ['class' => 'form-control form-select','required']) }}
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