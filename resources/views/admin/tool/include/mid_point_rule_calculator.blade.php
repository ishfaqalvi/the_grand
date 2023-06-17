<form method="POST" action="{{ route('mid-point-rule') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('Enter value of X1') }}
            {{ Form::number('x1', '', ['class' => 'form-control' . ($errors->has('x1') ? ' is-invalid' : ''), 'placeholder' => 'X1','required']) }}
            {!! $errors->first('x1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('Enter value of X2') }}
            {{ Form::number('x2', '', ['class' => 'form-control' . ($errors->has('x2') ? ' is-invalid' : ''), 'placeholder' => 'X2','required']) }}
            {!! $errors->first('x2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('Enter value of Y1') }}
            {{ Form::number('y1', '', ['class' => 'form-control' . ($errors->has('y1') ? ' is-invalid' : ''), 'placeholder' => 'Y1','required']) }}
            {!! $errors->first('y1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('Enter value of Y2') }}
            {{ Form::number('y2', '', ['class' => 'form-control' . ($errors->has('y2') ? ' is-invalid' : ''), 'placeholder' => 'Y2', 'required']) }}
            {!! $errors->first('y2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>