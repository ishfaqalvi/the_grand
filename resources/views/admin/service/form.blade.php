<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image','required','accept'=> 'image/png,image/jpg,image/jpeg']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Image upload .....) </small>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('heading') }}
        {{ Form::text('heading', $service->heading, ['class' => 'form-control' . ($errors->has('heading') ? ' is-invalid' : ''), 'placeholder' => 'Heading']) }}
        {!! $errors->first('heading', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Restaurant ...) </small>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sub_heading') }}
        {{ Form::text('sub_heading', $service->sub_heading, ['class' => 'form-control' . ($errors->has('sub_heading') ? ' is-invalid' : ''), 'placeholder' => 'Sub Heading']) }}
            {!! $errors->first('sub_heading', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Historic restaurant renovated .....) </small>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('button') }}
        {{ Form::text('button', $service->button, ['class' => 'form-control' . ($errors->has('button') ? ' is-invalid' : ''), 'placeholder' => 'Button']) }}
        {!! $errors->first('button', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Button Name .....) </small>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('order') }}
        {{ Form::number('order', $service->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
    </div>
    
    <div class="form-group col-md-6">
        {{ Form::label('branch') }}
        {{ Form::select('branch_id', $branches, $service->branch_id, ['class' => 'form-control' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Select Branch Name ) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('status') }}
        {{ Form::select('status',['Publish'=>'Publish','UnPublish'=>'UnPublish'], $service->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Publish or UnPublish ) </small>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $service->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Detail .... ) </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>



