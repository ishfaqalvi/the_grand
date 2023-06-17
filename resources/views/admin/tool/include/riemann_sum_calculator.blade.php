<form method="POST" action="{{ route('riemann-sum') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('Riemann sum of') }}
            {{ Form::text('sumof', 'x^2', ['class' => 'form-control' . ($errors->has('sumof') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
            {!! $errors->first('sumof', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Compute') }}
            {{ Form::select('compute', ['right'=>'right', 'left'=>'The left','midpoint'=>'Midpoint'], '',['class' => 'form-control' . ($errors->has('compute') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
            {!! $errors->first('compute', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('upperLimit') }}
            {{ Form::number('upperlimit', '', ['class' => 'form-control' . ($errors->has('upperLimit') ? ' is-invalid' : ''), 'placeholder' => 'Upper Limit']) }}
            {!! $errors->first('upperLimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('lowerLimit') }}
            {{ Form::number('lowerlimit', '', ['class' => 'form-control' . ($errors->has('lowerLimit') ? ' is-invalid' : ''), 'placeholder' => 'Lower Limit']) }}
            {!! $errors->first('lowerLimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('With') }}
            {{ Form::number('number', '', ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>