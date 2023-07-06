<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('title') }}
        {{ Form::text('title', $grandSlider->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('image') }}
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image','required','accept'=> 'image/png,image/jpg,image/jpeg']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('linktype') }}
        {{ Form::select('linktype',[''=>'--Select--','Internal'=>'Internal','External'=>'External'], $grandSlider->linktype, ['class' => 'form-control' . ($errors->has('linktype') ? ' is-invalid' : ''),'onchange' => 'CheckMenuType();']) }}
        {!! $errors->first('linktype', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group col-md-6" id="url" style="display:none;">
        {{ Form::label('url') }}
        {{ Form::text('url', $grandSlider->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url' ,'id'=>'url_field']) }}
        {!! $errors->first('url', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group col-md-6" id="link" style="display:none;">
        {{ Form::label('page link') }}
        {{ Form::text('link', $grandSlider->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''), 'placeholder' => 'Page link','id'=>'page_link']) }}
        {!! $errors->first('link', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $grandSlider->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
    </div>  
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $grandSlider->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>