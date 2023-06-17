<form method="POST" action="{{ route('mid-point-rule') }}" role="form" enctype="multipart/form-data" class="mt-5">
    @csrf
    <div class="row top-input">
        <div class="form-group col-lg-6 mb-3 value-field">
            <label for="ul" class="form-label">{{ __(dynamicString('value_of_x1',$language->id)) }}</label>
            <input class="form-control uinp" type="number" name="x1" id="ul1"/> 
        </div>                    
        <div class="form-group col-lg-6 mb-3">
            <label for="ll" class="form-label">{{ __(dynamicString('value_of_x2',$language->id)) }}</label>
            <input class="form-control linp" type="number" name="x2" id="ll1"/> 
        </div>
        <div class="form-group col-lg-6 mb-3 value-field">
            <label for="ul" class="form-label">{{ __(dynamicString('value_of_y1',$language->id)) }}</label>
            <input class="form-control uinp" type="number" name="y1" id="ul2"/> 
        </div>                    
        <div class="form-group col-lg-6 mb-3">
            <label for="ll" class="form-label">{{ __(dynamicString('value_of_y2',$language->id)) }}</label>
            <input class="form-control linp" type="number" name="y2" id="ll2"/> 
        </div>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="mt-3 preview equation-preview d-flex align-items-center justify-content-center"></div>
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
        $(".equation-preview").html("$$" +"{(" + $("#ul1").val()+ "+" + $("#ll1").val() + "/ 2"+ "),("+ $("#ul2").val()+ "+" + $("#ll2").val() + "/ 2" +")}" + "$$");
    }
    $(function () {
        setPreview(),
        $("#ul1, #ll1,#ul2, #ll2").on("keyup", function () {
            PreviewUpdate();
        });
    });
</script>
@endsection