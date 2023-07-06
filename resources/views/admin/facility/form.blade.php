<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('icon') }}
        {{ Form::text('icon', $facility->icon, ['class' => 'form-control' . ($errors->has('icon') ? ' is-invalid' : ''), 'placeholder' => 'Icon']) }}
        {!! $errors->first('icon', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('heading') }}
        {{ Form::text('heading', $facility->heading, ['class' => 'form-control' . ($errors->has('heading') ? ' is-invalid' : ''), 'placeholder' => 'Heading']) }}
        {!! $errors->first('heading', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $facility->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $facility->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>