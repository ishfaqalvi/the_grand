<div class="row">
    @if(auth()->user()->type == 'Main')
    <div class="form-group col-md-6">
        {{ Form::label('branch') }}
        {{ Form::select('branch_id', branches(), '', ['class' => 'form-control form-select' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Select branch </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('category') }}
        {{ Form::select('category_id', categories(), '', ['class' => 'form-control form-select' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Select category </small>
    </div>
    @else
    {{ Form::hidden('branch_id', auth()->user()->branch_id) }}
    <div class="form-group col-md-6">
        {{ Form::label('category') }}
        {{ Form::select('category_id', categories(auth()->user()->branch_id), '', ['class' => 'form-control form-select' . ($errors->has('category_id') ? ' is-invalid' : ''), 'required']) }}
        {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Select category </small>
    </div>
    @endif
    <div class="form-group col-md-6">
        {{ Form::label('type') }}
        {{ Form::select('type', ['Image' => 'Image','Video' => 'Video'], 'Image', ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'required']) }}
        {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Select type (Image or Video) </small>
    </div>
    <div class="form-group videoLinkField" style="display: none;">
        {{ Form::label('video_link') }}
        {{ Form::url('video_link', '', ['class' => 'form-control' . ($errors->has('video_link') ? ' is-invalid' : '')]) }}
        {!! $errors->first('video_link', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Video link </small>
    </div>
    <div class="form-group imageField">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control dropify' . ($errors->has('image') ? ' is-invalid' : ''), 'accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => isset($slider->image) ? asset($slider->image) : '', 'data-height' => '400']) }}
    </div>
    <div class="form-group videoField" style="display: none;">
        {{ Form::label('video_thumbnail') }}
        {{ Form::file('video_thumbnail', ['class' => 'form-control dropify' . ($errors->has('video') ? ' is-invalid' : ''), 'accept'=> 'image/png,image/jpg,image/jpeg', 'data-height' => '450']) }}
    </div>
</div>