<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered sections" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="sections">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Page Loader</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[contact_sections_pageloader]',['Show' => 'Show','Hide' => 'Hide'], $settings['contact_sections_pageloader'] != '' ? $settings['contact_sections_pageloader'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Page Scroll Progress</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[contact_sections_scrollprogress]',['Show' => 'Show','Hide' => 'Hide'], $settings['contact_sections_scrollprogress'] != '' ? $settings['contact_sections_scrollprogress'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Navigation</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[contact_sections_navigation]',['Show' => 'Show','Hide' => 'Hide'], $settings['contact_sections_navigation'] != '' ? $settings['contact_sections_navigation'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Banner</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[contact_sections_banner]',['Show' => 'Show','Hide' => 'Hide'], $settings['contact_sections_banner'] != '' ? $settings['contact_sections_banner'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Form</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[contact_sections_form]',['Show' => 'Show','Hide' => 'Hide'], $settings['contact_sections_form'] != '' ? $settings['contact_sections_form'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Map</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[contact_sections_map]',['Show' => 'Show','Hide' => 'Hide'], $settings['contact_sections_map'] != '' ? $settings['contact_sections_map'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Booking</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[contact_sections_booking]',['Show' => 'Show','Hide' => 'Hide'], $settings['contact_sections_booking'] != '' ? $settings['contact_sections_booking'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Footer</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[contact_sections_footer]',['Show' => 'Show','Hide' => 'Hide'], $settings['contact_sections_footer'] != '' ? $settings['contact_sections_footer'] : 'Show', ['class' => 'form-control form-select','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Copyright</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[contact_sections_copyright]',['Show' => 'Show','Hide' => 'Hide'], $settings['contact_sections_copyright'] != '' ? $settings['contact_sections_copyright'] : 'Show', ['class' => 'form-control form-select','required']) }}
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
@section('scripts')
<script>
    $(".sections").validate({
        errorClass: "text-danger",
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
            $(element).parent().addClass('has-danger');
            $(element).addClass('form-control-danger');
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
            $(element).parent().removeClass('has-danger');
            $(element).removeClass('form-control-danger');
            $(element).parent().addClass('has-success');
            $(element).addClass('form-control-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element)
        },
    });
</script>
@endsection