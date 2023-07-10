<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('heading') }}
        {{ Form::text('heading', $news->heading, ['class' => 'form-control' . ($errors->has('heading') ? ' is-invalid' : ''), 'placeholder' => 'Heading','required']) }}
        {!! $errors->first('heading', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Restaurant ...) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sub_heading') }}
        {{ Form::text('sub_heading', $news->sub_heading, ['class' => 'form-control' . ($errors->has('sub_heading') ? ' is-invalid' : ''), 'placeholder' => 'Sub Heading','required']) }}
        {!! $errors->first('sub_heading', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Historic restaurant renovated .....) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image','accept'=> 'image/png,image/jpg,image/jpeg', $news->image ? '' : 'required']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Image upload .....) </small>
        @if(isset($news->image) && $news->image != NULL)
            <img src="{{ asset($news->image) }}" width="100%">
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('date') }}
        {{ Form::date('date', $news->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date','required']) }}
        {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( date 01/13/2023 ) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('url') }}
        {{ Form::text('url', $news->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url','required']) }}
        {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (url : www.example@gmail.com ) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $news->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','min' => '1','required']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('branch') }}
        {{ Form::select('branch_id', branches(), $news->branch_id, ['class' => 'form-control' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Select Branch Name ) </small>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $news->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description','rows' => '4','required']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Detail .... ) </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>