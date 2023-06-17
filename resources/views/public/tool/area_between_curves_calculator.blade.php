<form method="POST" action="{{ route('area-between-the-curve') }}" role="form" enctype="multipart/form-data" class="mt-5">
    @csrf
    <div class="row top-input">
        <div class="form-group col-lg-12 mb-3">
            <div class="d-flex justify-content-between mb-3">
                <label for="function" class="form-label mb-0">{{ __(dynamicString('main_function',$language->id)) }}</label>
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
                    <input type="text" class="form-control" placeholder="Enter Equation here" id="MathInput" value="x^2/3-x" required="required" name="mathFunction">
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
            <div class="d-flex justify-content-between mb-3">
                <label for="function" class="form-label mb-0">{{ __(dynamicString('second_function',$language->id)) }}</label>
            </div>
            <div class="input-group main-input-group">
                <span class="position-relative p-0 col-12">
                    <input type="text" class="form-control" placeholder="Enter Equation here" id="MathInput2" value="x^2/3-x" required="required" name="mathFunction">
                    <span data-toggle="tooltip" data-placement="top" title="Click to view keyboard options" class="keyboard user-select-none" id="show-keyboard-btn">
                        <span data-toggle="collapse" data-target="#function-button" aria-expanded="false" aria-controls="collapseExample">
                            ⌨
                        </span>
                    </span>
                </span>
                <div class="collapse" id="function-button">
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
            <label for="variable">With respect to</label>
            <select id="variable" class="form-select mt-2" name="variable">
                <option value="x" selected>x</option>
                <option vlaue="y">y</option>
                <option value="z">z</option>
            </select>
        </div>
        <div class="form-group col-lg-12 d-flex">
            <div class="form-group col-lg-6 mb-3 value-field">
                <label for="ul" class="form-label">{{ __(dynamicString('upper_limit',$language->id)) }}</label>
                <input class="form-control uinp" type="number" name="upperLimit" id="ul"/> 
            </div>                    
            <div class="form-group col-lg-6 mb-3">
                <label for="ll" class="form-label">{{ __(dynamicString('lower_limit',$language->id)) }}</label>
                <input class="form-control linp" type="number" name="lowerLimit" id="ll"/> 
            </div>
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
        var upperLimit = $("#ul").val(),
            lowerLimit = $("#ll").val();
        ("infinity" != upperLimit && "inf" != upperLimit) || (upperLimit = "∞"),
            ("infinity" != lowerLimit && "inf" != lowerLimit) || (lowerLimit = "∞"),
            $(".equation-preview").html("$$\\int_{" + lowerLimit + "}^{" + upperLimit + "}(" + $("#MathInput").val() + ")-(" + $("#MathInput2").val() + ")d" + $("#variable").val() + "$$");
    }
    $(function () {
        setPreview(),
        $("#ul, #ll, #variable").on("change", function () {
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
        })
    });
</script>
@endsection