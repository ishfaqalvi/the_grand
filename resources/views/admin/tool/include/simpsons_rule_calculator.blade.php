<form method="POST" action="{{ route('simpson-s-rule') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('Simpson Rule') }}
            {{ Form::text('MathInput', '1/(2 root(x)-1)', ['class' => 'form-control' . ($errors->has('MathInput') ? ' is-invalid' : ''), 'placeholder' => 'Enter Equation here','required']) }}
            {!! $errors->first('MathInput', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('From X=') }}
            {{ Form::number('value1', '', ['class' => 'form-control' . ($errors->has('value1') ? ' is-invalid' : ''), 'placeholder' => 'Upper Limit']) }}
            {!! $errors->first('value1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('To X=') }}
            {{ Form::number('value2', '', ['class' => 'form-control' . ($errors->has('value2') ? ' is-invalid' : ''), 'placeholder' => 'Lower Limit']) }}
            {!! $errors->first('value2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('with interval width equal to') }}
            {{ Form::number('value3', '', ['class' => 'form-control' . ($errors->has('value3') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
            {!! $errors->first('value3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>