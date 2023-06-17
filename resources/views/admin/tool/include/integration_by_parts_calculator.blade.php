<form method="POST" action="{{ route('integration-by-parts') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('function') }}
            {{ Form::text('mathFunction', ' x lnx', ['class' => 'form-control' . ($errors->has('mathFunction') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
            {!! $errors->first('mathFunction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('variable') }}
            {{ Form::select('variable', ['x' =>'X', 'y' => 'Y','z' => 'Z'], 'x',['class' => 'form-control' . ($errors->has('variable') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
            {!! $errors->first('variable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('type') }}
            {{ Form::select('type', ['definite' =>'Definite', 'indefinite' => 'Indefinite'], 'definite',['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('upperLimit') }}
            {{ Form::number('upperLimit', '', ['class' => 'form-control' . ($errors->has('upperLimit') ? ' is-invalid' : ''), 'placeholder' => 'Upper Limit']) }}
            {!! $errors->first('upperLimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('lowerLimit') }}
            {{ Form::number('lowerLimit', '', ['class' => 'form-control' . ($errors->has('lowerLimit') ? ' is-invalid' : ''), 'placeholder' => 'Lower Limit']) }}
            {!! $errors->first('lowerLimit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
 