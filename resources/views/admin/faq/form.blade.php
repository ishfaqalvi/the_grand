<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('title') }}
        {{ Form::text('title', $faq->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $faq->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $faq->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>