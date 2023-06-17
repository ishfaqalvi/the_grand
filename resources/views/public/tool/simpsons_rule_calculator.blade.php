<form method="POST" action="{{ route('simpson-s-rule') }}" role="form" enctype="multipart/form-data" class="mt-5">
    @csrf
    <div class="row top-input">
        <div class="form-group col-lg-12 mb-3">
            <div class="d-flex justify-content-between mb-3">
                <label for="function" class="form-label mb-0">{{ __(dynamicString('simpson_input',$language->id)) }}</label>
            </div>
            <div class="input-group main-input-group">
                <span class="position-relative p-0 col-12">
                    <input type="text" class="form-control" placeholder="Enter Equation here" id="MathInput" value="1/(2 root(x)-1)" required="required"/>
                </span>
            </div>
        </div>
        <div class="form-group col-lg-4 mb-3 value-field ul">
            <label for="ul" class="form-label">{{ __(dynamicString('upper_limit',$language->id)) }}</label>
            <input class="form-control uinp" type="number" name="upperLimit" id="ul"/> 
        </div>                    
        <div class="form-group col-lg-4 mb-3 li">
            <label for="ll" class="form-label">{{ __(dynamicString('lower_limit',$language->id)) }}</label>
            <input class="form-control linp" type="number" name="lowerLimit" id="ll"/> 
        </div>
        <div class="form-group col-lg-4 mb-3">
            <label for="ll" class="form-label">{{ __(dynamicString('interval_width',$language->id)) }}</label>
            <input class="form-control" type="number" value="0.2"  name="value3"/> 
        </div>
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
        var n = $("#ul").val(),
            t = $("#ll").val();
        ("infinity" != n && "inf" != n) || (n = "∞"), ("infinity" != t && "inf" != t) || (t = "∞"), $(".equation-preview").html("$$\\int_{" + t + "}^{" + n + "}(" + $("#MathInput").val() + ")dx" + "$$");
    }
    $(function () {
        setPreview(),
        $("#ul, #ll").on("change", function () {
            PreviewUpdate();
        }),
        $("#MathInput").on("keyup", function () {
            PreviewUpdate();
        }),
        $(".key-btn").on("click", function (n) {
            n.preventDefault();
            n = $(this).data("value");
            void 0 !== n && insertAtCursorPosition(n);
        }),
        $("#clear-btn").on("click", function () {
            confirm("Do you really want to clear the input?") && $("#MathInput").val("");
        }),
        $("#equation-dropdown a").on("click", function () {
            $("#MathInput").val($(this).text()), PreviewUpdate();
        }),
        $("select[name='type']").change(function () {
            "definite" == $(this).val() ? $(".bonds").show("slow") : $(".bonds").hide("slow");
            "indefinite" == $(this).val() && ($("#ul, #ll").val(""), PreviewUpdate());
        });
    });
</script>
@endsection