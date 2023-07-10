<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('icon') }}
        {{ Form::text('icon', $facility->icon, ['class' => 'form-control' . ($errors->has('icon') ? ' is-invalid' : ''), 'placeholder' => 'Icon']) }}
        {!! $errors->first('icon', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (icon ...) </small>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('title') }}
        {{ Form::text('title', $facility->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Restaurant ...) </small>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('order') }}
        {{ Form::number('order', $facility->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
    </div>
    
    <div class="form-group col-md-6">
        {{ Form::label('branch') }}
        {{ Form::select('branch_id', $branches, $facility->branch_id, ['class' => 'form-control' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Select Branch Name ) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('status') }}
        {{ Form::select('status',['Publish'=>'Publish','UnPublish'=>'UnPublish'], $facility->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Publish or UnPublish ) </small>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $facility->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Detail .... ) </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>




