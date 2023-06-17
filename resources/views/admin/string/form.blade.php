<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('key') }}
        {{ Form::text('key', $dynamicString->key, ['class' => 'form-control' . ($errors->has('key') ? ' is-invalid' : ''), 'placeholder' => 'Key','required']) }}
        {!! $errors->first('key', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-8">
        {{ Form::label('value') }}
        {{ Form::text('value', $dynamicString->value, ['class' => 'form-control' . ($errors->has('value') ? ' is-invalid' : ''), 'placeholder' => 'Value','required']) }}
        {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>