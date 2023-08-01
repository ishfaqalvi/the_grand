<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('page') }}
        {{ Form::select('page_id', homePages(), $service->page_id, ['class' => 'form-control form-select' . ($errors->has('page_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--']) }}
        {!! $errors->first('page_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Select Page Name ) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('heading') }}
        {{ Form::text('heading', $service->heading, ['class' => 'form-control' . ($errors->has('heading') ? ' is-invalid' : ''), 'placeholder' => 'Heading','required']) }}
        {!! $errors->first('heading', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Restaurant ...) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sub_heading') }}
        {{ Form::text('sub_heading', $service->sub_heading, ['class' => 'form-control' . ($errors->has('sub_heading') ? ' is-invalid' : ''), 'placeholder' => 'Sub Heading','required']) }}
        {!! $errors->first('sub_heading', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Historic restaurant renovated .....) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image', $service->image ? '' : 'required','accept'=> 'image/png,image/jpg,image/jpeg']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Image upload size width='570px' & height='380px' ) </small>
        @if(isset($service->image) &&  $service->image != NULL)
        <img src="{{ asset($service->image) }}" width="100%">
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('link') }}
        {{ Form::text('link', $service->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''), 'placeholder' => 'link','required']) }}
        {!! $errors->first('link', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Page link .....) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('button_title') }}
        {{ Form::text('button_title', $service->button_title, ['class' => 'form-control' . ($errors->has('button_title') ? ' is-invalid' : ''), 'placeholder' => 'Button Title','required']) }}
        {!! $errors->first('button_title', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Service Button Title .....) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $service->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $service->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description','rows' => '4','required']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Detail .... ) </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>



