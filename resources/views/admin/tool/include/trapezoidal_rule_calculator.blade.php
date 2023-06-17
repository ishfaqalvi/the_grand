<form method="POST" action="{{ route('trapezoidal-rule') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('Enter Equation') }}
            {{ Form::text('', 'sin(x^2)', ['class' => 'form-control' . ($errors->has('') ? ' is-invalid' : ''), 'placeholder' => 'Enter Equation here','required']) }}
            {!! $errors->first('', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('upperLimit') }}
            {{ Form::number('upperlimit', '', ['class' => 'form-control' . ($errors->has('upperlimit') ? ' is-invalid' : ''), 'placeholder' => 'Upper Limit']) }}
            {!! $errors->first('upperlimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('lowerLimit') }}
            {{ Form::number('lowerlimit', '', ['class' => 'form-control' . ($errors->has('lowerlimit') ? ' is-invalid' : ''), 'placeholder' => 'Lower Limit']) }}
            {!! $errors->first('lowerlimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('Number of Trapezoids') }}
            {{ Form::number('number', '', ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
