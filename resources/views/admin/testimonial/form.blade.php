<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image','required','accept'=> 'image/png,image/jpg,image/jpeg']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (Image upload .....) </small>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('name') }}
        {{ Form::text('name', $testimonial->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( date 01/13/2023 ) </small>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('order') }}
        {{ Form::number('order', $testimonial->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
    </div>
    
    <div class="form-group col-md-6">
        {{ Form::label('branch') }}
        {{ Form::select('branch_id', $branches, $testimonial->branch_id, ['class' => 'form-control' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Select Branch Name ) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('status') }}
        {{ Form::select('status',['Publish'=>'Publish','UnPublish'=>'UnPublish'], $testimonial->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Publish or UnPublish ) </small>
    </div>
    
    <div class="form-group col-md-12">
        {{ Form::label('message') }}
        {{ Form::textarea('message', $testimonial->message, ['class' => 'form-control' . ($errors->has('message') ? ' is-invalid' : ''), 'placeholder' => 'Message']) }}
        {!! $errors->first('message', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( client : review ) </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>


