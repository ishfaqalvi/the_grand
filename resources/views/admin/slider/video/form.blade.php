<div class="row">
    <div class="col-7">
        <div class="row">
            @if(auth()->user()->type == 'Main')
            <div class="form-group col-md-6">
                {{ Form::label('branch') }}
                {{ Form::select('branch_id', branches(), $slider->branch_id, ['class' => 'form-control form-select' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
                {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Select branch </small>
            </div>
            @else
                {{ Form::hidden('branch_id', auth()->user()->branch_id) }}
            @endif
            {{ Form::hidden('type', 'Video') }}
            <div class="form-group col-md-6">
                {{ Form::label('title') }}
                {{ Form::text('title', $slider->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
                {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Title of slide </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('sub_title') }}
                {{ Form::text('sub_title', $slider->sub_title, ['class' => 'form-control' . ($errors->has('sub_title') ? ' is-invalid' : ''), 'placeholder' => 'Sub Title','required']) }}
                {!! $errors->first('sub_title', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Sub title of slide </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('linktype') }}
                {{ Form::select('linktype', ['Internal' => 'Internal','External' => 'External'], $slider->linktype, ['class' => 'form-control form-select' . ($errors->has('linktype') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
                {!! $errors->first('linktype', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Select type (Internal or External) </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('link') }}
                {{ Form::text('link', $slider->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''), 'placeholder' => 'Link','required']) }}
                {!! $errors->first('link', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> https://www.youtube.com/ </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('button_text') }}
                {{ Form::text('button_text', $slider->button_text, ['class' => 'form-control' . ($errors->has('button_text') ? ' is-invalid' : ''), 'placeholder' => 'Button Text','required']) }}
                {!! $errors->first('button_text', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control- feedback"> Button of slide </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('stars') }}
                {{ Form::number('stars', $slider->stars, ['class' => 'form-control' . ($errors->has('stars') ? ' is-invalid' : ''), 'placeholder' => 'Stars','min' => '1','required']) }}
                {!! $errors->first('stars', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Number of stars </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('order') }}
                {{ Form::number('order', $slider->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','min' => '0','required']) }}
                {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Order number </small>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="form-group col-md-12">
            {{ Form::label('video') }}
            {{ Form::file('video', ['class' => 'form-control dropify' . ($errors->has('video') ? ' is-invalid' : ''), $slider->video ? '': 'required','accept'=> '.mp4','data-default-file' => isset($slider->video) ? asset($slider->video) : '', 'data-height' => '400']) }}
            <small class="form-control-feedback"> Video of slide size(max-width = 1440px , height = 100vh) </small>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>