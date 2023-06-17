<form method="POST" action="{{ route('shell-method') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('function') }}
            {{ Form::text('equation', '3x^3 + 2x^2', ['class' => 'form-control' . ($errors->has('equation') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
            {!! $errors->first('equation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('upperLimit') }}
            {{ Form::number('ul', '', ['class' => 'form-control' . ($errors->has('ul') ? ' is-invalid' : ''), 'placeholder' => 'Upper Limit']) }}
            {!! $errors->first('ul', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('lowerLimit') }}
            {{ Form::number('ll', '', ['class' => 'form-control' . ($errors->has('ll') ? ' is-invalid' : ''), 'placeholder' => 'Lower Limit']) }}
            {!! $errors->first('ll', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>