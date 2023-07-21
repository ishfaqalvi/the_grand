<div class="row">
    <div class="form-group col-md-6">
    <div class="form-group">
            {{ Form::label('branch') }}
            {{ Form::text('branch_id', $category->branch_id, ['class' => 'form-control' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => 'Page']) }}
            {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <small class="form-control-feedback"> Example: ( Select Page Name ) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('title') }}
        {{ Form::text('title', $category->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Restaurant ...) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image', $category->image ? '' : 'required','accept'=> 'image/png,image/jpg,image/jpeg']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Image upload size width='570px' & height='380px' ) </small>
        @if(isset($category->image) &&  $category->image != NULL)
        <img src="{{ asset($category->image) }}" width="100%">
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('link') }}
        {{ Form::text('link', $category->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''), 'placeholder' => 'Link']) }}
        {!! $errors->first('link', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
       {{ Form::label('label') }}
        {{ Form::text('label', $category->label, ['class' => 'form-control' . ($errors->has('label') ? ' is-invalid' : ''), 'placeholder' => 'Label']) }}
        {!! $errors->first('label', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Historic restaurant renovated .....) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $category->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
