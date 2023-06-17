<form method="POST" action="{{ route('double-integral') }}" role="form" enctype="multipart/form-data" class="mt-5">
    @csrf
    <div class="row top-input">
        <div class="form-group col-lg-12 mb-3">
            <div class="d-flex justify-content-between mb-3">
                <label for="function" class="form-label mb-0">{{ __(dynamicString('function_input_title',$language->id)) }}</label>
                @if(count($page->tool->examples) > 0)
                <div class="dropdown">
                    <a class="btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Load Example
                    </a>
                    <ul class="dropdown-menu" id="equation-dropdown">
                        @foreach ($page->tool->examples as $eq)
                            <li><a class="dropdown-item">{{ $eq }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="input-group main-input-group">
                <span class="position-relative p-0 col-12">
                    <input type="text" class="form-control" placeholder="Enter Equation here" id="MathInput" value="2x + y" required="required" name="mathFunction">
                    <span data-toggle="tooltip" data-placement="top" title="Click to view keyboard options" class="keyboard user-select-none" id="show-keyboard-btn">
                        <span data-toggle="collapse" data-target="#keyboard-button" aria-expanded="false" aria-controls="collapseExample">
                            ⌨
                        </span>
                    </span>
                </span>
                <div class="collapse" id="keyboard-button">
                    <div class="card card-body bg-transparent border-0">
                        <div class="col-12 d-flex flex-wrap justify-content-center mt-1">
                            <button type="button" class="btn btn-dark m-1 btn-lg" id="clear-btn">{{ __('Clear') }}</button>
                            <button type="button" class=" m-1 btn btn-dark key-btn btn-lg" data-value="+" :>+</button>
                            <button type="button" class=" m-1 btn btn-dark key-btn btn-lg" data-value="-" :>-</button>
                            <button type="button" class=" m-1 btn btn-dark key-btn btn-lg" data-value="/" :>÷</button>
                            <button type="button" class=" m-1 btn btn-dark key-btn btn-lg" data-value="*" :>x</button>
                            <button type="button" class=" m-1 btn btn-dark key-btn btn-lg" data-value="^" :>^</button>
                            <button type="button" class=" m-1 btn btn-dark key-btn btn-lg" data-value="(" :>(</button>
                            <button type="button" class=" m-1 btn btn-dark key-btn btn-lg" data-value=")" :>)</button>
                            <button type="button" class="m-1 btn btn-dark btn-lg key-btn" data-value="\sqrt(">√</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-lg-6 mb-3 value-field">
            <label for="variable">{{ __(dynamicString('integral_calculator_variable',$language->id)) }}</label>
            <select id="variable" class="form-select mt-2" name="variable">
                <option value="dxdy">dxdy</option>
                <option value="dydx">dydx</option>
                <option value="dxdx">dxdx</option>
                <option value="dydy">dydy</option>
            </select>
        </div>
        <div class="form-group col-lg-6 mb-3">
            <label for="variable">{{ __(dynamicString('integral_type',$language->id)) }}</label>
            <select id="variable" class="form-select mt-2" name="type">
                <option value="definite" selected>{{ __(dynamicString('definite_type',$language->id)) }}</option>
                <option value="indefinite">{{ __(dynamicString('indefinite_type',$language->id)) }}</option>
            </select>
        </div>
    </div>
    <div class="row bonds">
        <div class="form-group col-lg-3 mb-3 value-field">
            <label for="ul" class="form-label">{{ __(dynamicString('x_upper_limit',$language->id)) }}</label>
            <input class="form-control uinp" type="number" name="x_upperLimit" id="ul1"/> 
        </div>                    
        <div class="form-group col-lg-3 mb-3 value-field">
            <label for="ll" class="form-label">{{ __(dynamicString('x_lower_limit',$language->id)) }}</label>
            <input class="form-control linp" type="number" name="x_lowerLimit" id="ll1"/> 
        </div>
        <div class="form-group col-lg-3 mb-3 value-field">
            <label for="ul" class="form-label">{{ __(dynamicString('y_upper_limit',$language->id)) }}</label>
            <input class="form-control uinp" type="number" name="y_upperLimit" id="ul2"/> 
        </div>                    
        <div class="form-group col-lg-3 mb-3">
            <label for="ll" class="form-label">{{ __(dynamicString('y_lower_limit',$language->id)) }}</label>
            <input class="form-control linp" type="number" name="y_lowerLimit" id="ll2"/> 
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
        $(".equation-preview").html("$$\\int_{" + $("#ll2").val() + "}^{" + $("#ul2").val() + "}\\int_{" + $("#ll1").val() + "}^{" + $("#ul1").val() + "}(" + $("#MathInput").val() + ")" + $("#variable").val() + "$$");
    }
    $(function () {
        setPreview(),
        $("#ul1, #ll1,#ul2, #ll2, #variable").on("change", function () {
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
            "indefinite" == $(this).val() && ($("#ul1, #ll1,#ul2, #ll2").val(""), PreviewUpdate());
        });
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