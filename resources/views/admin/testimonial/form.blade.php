<div class="row">
    <div class="col-md-6">
        <div class="row">
            @if(auth()->user()->type == 'Main')
            <div class="form-group col-md-12">
                {{ Form::label('branch') }}
                {{ Form::select('branch_id', branches(), $testimonial->branch_id, ['class' => 'form-control form-select' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
                {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Select branch </small>
            </div>
            @else
                {{ Form::hidden('branch_id', auth()->user()->branch_id) }}
            @endif
            <div class="form-group col-md-12">
                {{ Form::label('name') }}
                {{ Form::text('name', $testimonial->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name','required']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Example: ( Name of testimonial ) </small>
            </div>
            <div class="form-group col-md-12">
                {{ Form::label('auther') }}
                {{ Form::text('auther', $testimonial->auther, ['class' => 'form-control' . ($errors->has('auther') ? ' is-invalid' : ''), 'placeholder' => 'Auther','required']) }}
                {!! $errors->first('auther', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Example: ( Auther of testimonial ) </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('stars') }}
                {{ Form::number('stars', $testimonial->stars, ['class' => 'form-control' . ($errors->has('stars') ? ' is-invalid' : ''), 'placeholder' => 'Stars','required','min' => '1']) }}
                {!! $errors->first('stars', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Example: ( Number of stars ) </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('order') }}
                {{ Form::number('order', $testimonial->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required', 'min'=>'0']) }}
                {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
            </div>
        </div>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control dropify' . ($errors->has('image') ? ' is-invalid' : ''), $testimonial->image ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => isset($testimonial->image) ? asset($testimonial->image) : '', 'data-height' => '300']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> 
            Example: ( Image upload size width='70px' & height='70px' ) 
        </small>
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


