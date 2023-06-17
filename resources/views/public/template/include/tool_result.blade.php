@if ($pods = Session::get('data'))
    <div class="row">
        <div class="col-lg-12">
            <div class="result-area mt-5" id="accordion">
                @foreach($pods as $key => $pod)
                <div class="card">
                    <div class="card-header" id="heading_{{ $key }}">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_{{ $key }}" aria-expanded="true" aria-controls="collapse_{{ $key }}">
                            {{ $pod['title'] }}
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_{{ $key }}" class="collapse {{ $key == 0 ? 'show' : ''}}" aria-labelledby="heading_{{ $key }}" data-parent="#accordion">
                        <div class="card-body">
                            @foreach($pod['subpods'] as $subpod)
                                <div class="row">
                                    <div class="col-md-4"> 
                                        <img src="{{ $subpod['img']['src'] }}" class="img-responsive thumbnail m-r-15"> 
                                    </div>
                                    <!-- <div class="col-md-8">
                                        {{ $subpod['plaintext'] }}
                                    </div> -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        document.documentElement.scrollTop = 1000; 
    </script>
@endif
@if ($pods = Session::get('result'))
<div class="row">
    <div class="col-lg-12">
        <div class="result-area mt-5" class="resultbox" id="accordion">
            <!-- <div class="card">
                <div class="card-header" id="input">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_input" aria-expanded="true" aria-controls="collapse_input">
                            Input
                        </button>
                    </h5>
                </div>
                <div id="collapse_input" class="collapse show" aria-labelledby="input" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="card">
                <div class="card-header" id="answers">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_answers" aria-expanded="true" aria-controls="collapse_answers">
                            Answers
                        </button>
                    </h5>
                </div>
                <div id="collapse_answers" class="collapse show" aria-labelledby="answers" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $pods['answer'] !!} 
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="card">
                <div class="card-header" id="flow_steps">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_steps" aria-expanded="true" aria-controls="collapse_steps">
                            Solution
                        </button>
                    </h5>
                </div>
                <div id="collapse_steps" class="collapse show" aria-labelledby="flow_steps" data-parent="#accordion">
                    <div class="card-body" id="steps">
                        @foreach($pods['steps'] as $step)
                            {!! $step !!}
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-header" id="parsing_tree">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_parsetree" aria-expanded="true" aria-controls="collapse_parsetree">
                            Parsing Tree
                        </button>
                    </h5>
                </div>
                <div id="collapse_parsetree" class="collapse show" aria-labelledby="parsing_tree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"> 
                            </div>
                            <div class="col-md-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<script>
    document.documentElement.scrollTop = 1000; 
</script>
@endif