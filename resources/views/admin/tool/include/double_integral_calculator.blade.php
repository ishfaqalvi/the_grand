<form method="POST" action="{{ route('double-integral') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('function') }}
            {{ Form::text('mathFunction', '2x+y', ['class' => 'form-control' . ($errors->has('mathFunction') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
            {!! $errors->first('mathFunction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('variable') }}
            {{ Form::select('variable', ['dxdy' =>'dxdy', 'dydx' => 'dydx','dxdx' => 'dxdx', 'dydy' => 'dydy'], 'dxdy',['class' => 'form-control' . ($errors->has('variable') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
            {!! $errors->first('variable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('type') }}
            {{ Form::select('type', ['definite' =>'Definite', 'indefinite' => 'Indefinite'], 'definite',['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('upperLimit for x') }}
            {{ Form::number('x_upperLimit', '', ['class' => 'form-control' . ($errors->has('x_upperLimit') ? ' is-invalid' : ''), 'placeholder' => 'Upper Limit x']) }}
            {!! $errors->first('x_upperLimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('lowerLimit for x') }}
            {{ Form::number('x_lowerLimit', '', ['class' => 'form-control' . ($errors->has('x_lowerLimit') ? ' is-invalid' : ''), 'placeholder' => 'Lower Limit x']) }}
            {!! $errors->first('x_lowerLimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('upperLimit for y') }}
            {{ Form::number('y_upperLimit', '', ['class' => 'form-control' . ($errors->has('y_upperLimit') ? ' is-invalid' : ''), 'placeholder' => 'Upper Limit y']) }}
            {!! $errors->first('y_upperLimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('lowerLimit for y') }}
            {{ Form::number('y_lowerLimit', '', ['class' => 'form-control' . ($errors->has('y_lowerLimit') ? ' is-invalid' : ''), 'placeholder' => 'Lower Limit y']) }}
            {!! $errors->first('y_lowerLimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>