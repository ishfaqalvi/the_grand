<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('images') }}
        <input type="file" class="form-control" required name="image">
        {!! $errors->first('images', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('heading') }}
        {{ Form::text('heading', $service->heading, ['class' => 'form-control' . ($errors->has('heading') ? ' is-invalid' : ''), 'placeholder' => 'Heading']) }}
        {!! $errors->first('heading', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sub_heading') }}
        {{ Form::text('sub_heading', $service->sub_heading, ['class' => 'form-control' . ($errors->has('sub_heading') ? ' is-invalid' : ''), 'placeholder' => 'Sub Heading']) }}
        {!! $errors->first('sub_heading', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('button') }}
        {{ Form::text('button', $service->button, ['class' => 'form-control' . ($errors->has('button') ? ' is-invalid' : ''), 'placeholder' => 'Button']) }}
        {!! $errors->first('button', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $service->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::text('description', $service->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
