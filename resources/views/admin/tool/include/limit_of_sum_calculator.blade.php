<form method="POST" action="{{ route('limit-of-sum') }}" role="form" enctype="multipart/form-data" class="tool">
    @csrf
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('Enter function') }}
            {{ Form::text('lim', '1/n*(cos(k*pi/2/n))^2', ['class' => 'form-control' . ($errors->has('lim') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
            {!! $errors->first('lim', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('With Respect to') }}
            {{ Form::select('variable', ['n' =>'N', 'y' => 'Y','z' => 'Z'], 'n',['class' => 'form-control' . ($errors->has('variable') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
            {!! $errors->first('variable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('>n->inf k') }}
            {{ Form::text('number', '1', ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>