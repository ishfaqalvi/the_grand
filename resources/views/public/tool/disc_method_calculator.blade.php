<form method="POST" action="{{ route('disc-method') }}" role="form" enctype="multipart/form-data" class="mt-5">
    @csrf
    <div class="row top-input">
        <div class="form-group d-flex col-lg-12">
            <div class="form-group col-lg-6 mb-3 value-field">
                <label for="ul" class="form-label">{{ __(dynamicString('upper_function',$language->id)) }}</label>
                <input type="text" class="form-control" value="x-2" required="required" name="fx" id="fx"/> 
            </div>                    
            <div class="form-group col-lg-6 mb-3">
                <label for="ll" class="form-label">{{ __(dynamicString('lower_function',$language->id)) }}</label>
                <input type="text" class="form-control" value="-2" required="required" name="gx" id="gx" /> 
            </div>
        </div>
        <div class="form-group col-lg-6 mb-3 value-field">
            <label for="ul" class="form-label">{{ __(dynamicString('from_value',$language->id)) }}</label>
            <input class="form-control uinp" type="number" name="ul" id="ul"/> 
        </div>                    
        <div class="form-group col-lg-6 mb-3">
            <label for="ll" class="form-label">{{ __(dynamicString('to_value',$language->id)) }}</label>
            <input class="form-control linp" type="number" name="ll" id="ll"/> 
        </div>
    </div>
    <div class="col-lg-12 mt-5">
    </div>
    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="mt-3 preview equation-preview d-flex align-items-center justify-content-center">
        </div>
        <div class="d-flex cal-button mt-5">
            <button class="btn calculate-btn">{{ __(dynamicString('calculate_btn_heading',$language->id)) }}</button>
            <a href="#" class="btn resource-btn">{{ __(dynamicString('resources_btn_heading',$language->id)) }}
                <img src="{{ asset('public/images/btn-vector.webp') }}"/>
            </a>
        </div>
    </div>
</form>
@section('scripts')
<script>
    function setPreview() {
        $(".equation-preview").html("$$\\pi\\int_{" + $("#ll").val() + "}^{" + $("#ul").val() + "}[(" + $("#fx").val() + ")^2 - (" + $("#gx").val() + ")^2]dx$$");
    }
    $(function () {
        setPreview(),
        $("#ul, #ll").on("change", function () {
            PreviewUpdate();
        }),
        $("#fx, #gx").on("keyup", function () {
            PreviewUpdate();
        })
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var indefinite_answer = $("#steps").last().find("script").last();
        $("#steps").find("script").replaceWith(function () {
            return $("<span />", { html: "$$" + $(this).html() + "$$" });
        }),
        MathJax.typesetPromise().then(() => {
            MathJax.typesetPromise();
        })
    });
</script>
@endsection