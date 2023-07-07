<div class="row">
    <div class="form-group col-md-6">
            {{ Form::label('name') }}
            {{ Form::text('name', $branch->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('prefix') }}
        {{ Form::text('prefix', $branch->prefix, ['class' => 'form-control' . ($errors->has('prefix') ? ' is-invalid' : ''), 'placeholder' => 'Prefix']) }}
        {!! $errors->first('prefix', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image','required','accept'=> 'image/png,image/jpg,image/jpeg']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>