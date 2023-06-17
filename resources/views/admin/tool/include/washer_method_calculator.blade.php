<form method="POST" action="{{ route('washer-method') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('f(x):') }}
            {{ Form::text('fx', 'x-2', ['class' => 'form-control' . ($errors->has('fx') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
            {!! $errors->first('fx', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('g(x):') }}
            {{ Form::text('gx', '-2', ['class' => 'form-control' . ($errors->has('gx') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
            {!! $errors->first('gx', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('upperLimit') }}
            {{ Form::number('ul', '', ['class' => 'form-control' . ($errors->has('ul') ? ' is-invalid' : ''), 'placeholder' => 'Upper Limit']) }}
            {!! $errors->first('upperLimit', '<div class="invalid-feedback">:message</div>') !!}
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