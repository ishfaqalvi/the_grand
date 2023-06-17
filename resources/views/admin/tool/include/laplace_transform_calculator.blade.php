<form method="POST" action="{{ route('laplace-transform') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('function') }}
            {{ Form::text('input', 'sin(t) t^4', ['class' => 'form-control' . ($errors->has('input') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
            {!! $errors->first('input', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

  