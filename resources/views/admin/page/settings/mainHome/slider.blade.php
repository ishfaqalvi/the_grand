<form method="POST" action="{{ route('pages.settings') }}" class="form-horizontal form-bordered slider" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="slider">
    <input type="hidden" name="settable_type" value="Page">
    <input type="hidden" name="settable_id" value="{{ $page->id }}">
    <div class="form-body">
        <div class="form-group row">
            <label class="control-label text-end col-md-3 mt-3">Type</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[mainHome_slider_type]',['Image' => 'Image','Video' => 'Video'], $settings['mainHome_slider_type'] != '' ? $settings['mainHome_slider_type'] : 'Image', ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Auto Play</label>
            <div class="col-md-9 mt-3">
                {{ Form::select('values[mainHome_slider_autoPlay]',['Yes' => 'Yes','No' => 'No'], $settings['mainHome_slider_autoPlay'] != '' ? $settings['mainHome_slider_autoPlay'] : 'Yes', ['class' => 'form-control','required']) }}
            </div>
            <label class="control-label text-end col-md-3 mt-3">Speed</label>
            <div class="col-md-9 mt-3">
                {{ Form::number('values[mainHome_slider_speed]', $settings['mainHome_slider_speed'], ['class' => 'form-control','required','min' => '5']) }}
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
    $(".slider").validate({
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