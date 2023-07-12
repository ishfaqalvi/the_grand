<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('name') }}
        {{ Form::text('name', $testimonial->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name','required']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( date 01/13/2023 ) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image',$testimonial->image ? '' : 'required','accept'=> 'image/png,image/jpg,image/jpeg']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Image upload size width='70px' & height='70px' ) </small>
        @if(isset($testimonial->image) &&  $testimonial->image != NULL)
        <img src="{{ asset($testimonial->image) }}" width="100%">
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $testimonial->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required', 'min'=>'0']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('branch') }}
        {{ Form::select('branch_id', branches(), $testimonial->branch_id, ['class' => 'form-control' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Select Branch Name ) </small>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('message') }}
        {{ Form::textarea('message', $testimonial->message, ['class' => 'form-control' . ($errors->has('message') ? ' is-invalid' : ''), 'placeholder' => 'Message','required', 'rows' =>'4']) }}
        {!! $errors->first('message', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( client : review ) </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>


