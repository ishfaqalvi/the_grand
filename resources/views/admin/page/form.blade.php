<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('template') }}
        {{ Form::select('template', ['Home' => 'Home','Image Gallery' => 'Image Gallery','Video Gallery' => 'Video Gallery','FAQS' => 'FAQS','Contact Us' => 'Contact Us'], $page->template, ['class' => 'form-control form-select' . ($errors->has('template') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('template', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    @if(auth()->user()->type == 'Main')
    <div class="form-group col-md-6">
        {{ Form::label('branch') }}
        {{ Form::select('branch_id', branches(), $page->branch_id, ['class' => 'form-control form-select' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    @else
        {{ Form::hidden('branch_id', auth()->user()->branch_id) }}
    @endif
    <div class="form-group col-md-6">
        {{ Form::label('title *') }}
        {{ Form::text('title', $page->title, ['class' => 'form-control page_name' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('slug') }}
        {{ Form::text('slug', $page->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug','required']) }}
        {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('follow_and_index') }}
        {{ Form::select('index', ['Yes' => 'Yes','No' => 'No'], $page->index, ['class' => 'form-control form-select' . ($errors->has('index') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('index', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('metaTitle *') }}
        {{ Form::text('metaTitle', $page->metaTitle, ['class' => 'form-control' . ($errors->has('metaTitle') ? ' is-invalid' : ''), 'placeholder' => 'Meta Title','required']) }}
        {!! $errors->first('metaTitle', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('metaDescription *') }}
        {{ Form::text('metaDescription', $page->metaDescription, ['class' => 'form-control' . ($errors->has('metaDescription') ? ' is-invalid' : ''), 'placeholder' => 'Meta Description']) }}
        {!! $errors->first('metaDescription', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('Open Graph Tags(OG Tags) *') }}
        {{ Form::textarea('og_tags', $page->og_tags, ['class' => 'form-control' . ($errors->has('og_tags') ? ' is-invalid' : ''), 'placeholder' => 'OG Tags', 'rows'=>'2']) }}
        {!! $errors->first('og_tags', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('Schema Markup *') }}
        {{ Form::textarea('schemas', $page->schemas, ['class' => 'form-control' . ($errors->has('schemas') ? ' is-invalid' : ''), 'placeholder' => 'Schema Markup', 'rows'=>'2']) }}
        {!! $errors->first('schemas', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $page->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description','rows'=>'3']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>