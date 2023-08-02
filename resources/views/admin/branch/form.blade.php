<div class="row">
    <div class="col-6">
        <div class="form-group col-md-12">
            {{ Form::label('type') }}
            {{ Form::select('type', ['Main Branch' => 'Main Branch', 'Sub Branch' => 'Sub Branch'], $branch->type, ['class' => 'form-control form-select' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type','required','placeholder' => '--Select--']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-control-feedback"> Select branch type </small>
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('name') }}
            {{ Form::text('name', $branch->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name','required']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-control-feedback"> Name of branch </small>
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('label') }}
            {{ Form::text('label', $branch->label, ['class' => 'form-control' . ($errors->has('label') ? ' is-invalid' : ''), 'placeholder' => 'Label','required']) }}
            {!! $errors->first('label', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-control-feedback"> Label of branch </small>
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('url') }}
            {{ Form::text('url', $branch->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url','required']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-control-feedback"> Url of branch </small>
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('url_title') }}
            {{ Form::text('url_title', $branch->url_title, ['class' => 'form-control' . ($errors->has('url_title') ? ' is-invalid' : ''), 'placeholder' => 'Url Title','required']) }}
            {!! $errors->first('url_title', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-control-feedback">String use for link title </small>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group col-md-12">
            {{ Form::label('thumbnail') }}
            {{ Form::file('thumbnail', ['class' => 'form-control dropify' . ($errors->has('thumbnail') ? ' is-invalid' : ''), $branch->thumbnail ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => isset($branch->thumbnail) ? asset($branch->thumbnail) : '', 'data-height' => '450']) }}
            {!! $errors->first('thumbnail', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-control-feedback"> Thumbnail of branch size(width = 545px , height = 360px)</small>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>