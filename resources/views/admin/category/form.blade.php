<div class="row">
    <div class="col-md-6">
        <div class="row">
            @if(auth()->user()->type == 'Main')
            <div class="form-group col-md-12">
                {{ Form::label('branch') }}
                {{ Form::select('branch_id', branches(), $category->branch_id, ['class' => 'form-control form-select' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
                {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Select branch </small>
            </div>
            @else
                {{ Form::hidden('branch_id', auth()->user()->branch_id) }}
            @endif
            <div class="form-group col-md-12">
                {{ Form::label('title') }}
                {{ Form::text('title', $category->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
                {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Title of category </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('image_link') }}
                {{ Form::text('image_link', $category->image_link, ['class' => 'form-control' . ($errors->has('image_link') ? ' is-invalid' : ''), 'placeholder' => 'Image Link','required']) }}
                {!! $errors->first('image_link', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Image gallery page slug </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('image_link_title') }}
                {{ Form::text('image_link_title', $category->image_link_title, ['class' => 'form-control' . ($errors->has('image_link_title') ? ' is-invalid' : ''), 'placeholder' => 'Image Link Title','required']) }}
                {!! $errors->first('image_link_title', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Image gallery link title </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('video_link') }}
                {{ Form::text('video_link', $category->video_link, ['class' => 'form-control' . ($errors->has('video_link') ? ' is-invalid' : ''), 'placeholder' => 'Video Link','required']) }}
                {!! $errors->first('video_link', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Video gallery page slug </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('video_link_title') }}
                {{ Form::text('video_link_title', $category->video_link_title, ['class' => 'form-control' . ($errors->has('video_link_title') ? ' is-invalid' : ''), 'placeholder' => 'Video Link Title','required']) }}
                {!! $errors->first('video_link_title', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Video gallery link title </small>
            </div>
            <div class="form-group col-md-6">
               {{ Form::label('label') }}
                {{ Form::text('label', $category->label, ['class' => 'form-control' . ($errors->has('label') ? ' is-invalid' : ''), 'placeholder' => 'Label','required']) }}
                {!! $errors->first('label', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Label of category </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('order') }}
                {{ Form::number('order', $category->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required','required']) }}
                {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control dropify' . ($errors->has('image') ? ' is-invalid' : ''), $category->image ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => isset($category->image) ? asset($category->image) : '', 'data-height' => '450']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback">  Image upload size width='546px' & height='341px' </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
