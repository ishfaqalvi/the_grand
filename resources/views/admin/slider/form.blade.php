<div class="row">
    @if(auth()->user()->type == 'Main')
    <div class="form-group col-md-6">
        {{ Form::label('branch') }}
        {{ Form::select('branch_id', branches(), $slider->branch_id, ['class' => 'form-control' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    @else
        {{ Form::hidden('branch_id', auth()->user()->branch_id) }}
    @endif
    <div class="form-group col-md-6">
        {{ Form::label('type') }}
        {{ Form::select('type', ['Image' => 'Image', 'Video' => 'Viddeo'], $slider->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6 imageField" style="display: none;">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : '')]) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        @if(isset($slider->image) &&  $slider->image != NULL)
        <img src="{{ asset($slider->image) }}" width="100%">
        @endif
    </div>
    <div class="form-group col-md-6 videoField" style="display: none;">
        {{ Form::label('video') }}
        {{ Form::file('video', ['class' => 'form-control' . ($errors->has('video') ? ' is-invalid' : ''), 'accept' => '.mp4']) }}
        {!! $errors->first('video', '<div class="invalid-feedback">:message</div>') !!}
        @if(isset($slider->video) &&  $slider->video != NULL)
        <video width="100%" height="200px" controls>
            <source src="{{ url($slider->video) }}" type="video/mp4">
        </video>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('title') }}
        {{ Form::text('title', $slider->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sub_title') }}
        {{ Form::text('sub_title', $slider->sub_title, ['class' => 'form-control' . ($errors->has('sub_title') ? ' is-invalid' : ''), 'placeholder' => 'Sub Title','required']) }}
        {!! $errors->first('sub_title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('linktype') }}
        {{ Form::select('linktype', ['Internal' => 'Internal','External' => 'External'], $slider->linktype, ['class' => 'form-control' . ($errors->has('linktype') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('linktype', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('link') }}
        {{ Form::text('link', $slider->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''), 'placeholder' => 'Link','required']) }}
        {!! $errors->first('link', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $slider->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','min' => '0','required']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>