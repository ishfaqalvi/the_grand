<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('key') }}
        {{ Form::text('key', $branch_setting->key, ['class' => 'form-control' . ($errors->has('key') ? ' is-invalid' : ''), 'placeholder' => 'Key']) }}
        {!! $errors->first('key', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('value') }}
        {{ Form::text('value', $branch_setting->value, ['class' => 'form-control' . ($errors->has('value') ? ' is-invalid' : ''), 'placeholder' => 'Value']) }}
        {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('branch_id') }}
        {{ Form::select('branch_id', $branches->pluck('name','id'), ['class' => 'form-select' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => 'Select Branch']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
