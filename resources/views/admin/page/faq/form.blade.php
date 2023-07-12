{{ Form::hidden('created_by', Auth::user()->id) }}
{{ Form::hidden('template', 'FAQ') }}
{{ Form::hidden('slug', '/') }}
{{ Form::hidden('x', '40') }}
{{ Form::hidden('y', '40') }}

<section>
    <div class="row">
        <div class="form-group col-md-4">
            {{ Form::label('title *') }}
            {{ Form::text('title', $page->title, ['class' => 'form-control page_name' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('canonical') }}
            {{ Form::text('canonical', $page->canonical, ['class' => 'form-control' . ($errors->has('canonical') ? ' is-invalid' : ''), 'placeholder' => 'Canonical']) }}
            {!! $errors->first('canonical', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('branch_id') }}
            {{ Form::select('branch_id', $branches, $page->branch_id, ['class' => 'form-control' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '- Select -']) }}
            {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('description') }}
            {{ Form::textarea('description', $page->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description','rows'=>'3']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('metaTitle *') }}
            {{ Form::text('metaTitle', $page->metaTitle, ['class' => 'form-control' . ($errors->has('metaTitle') ? ' is-invalid' : ''), 'placeholder' => 'Meta Title','required']) }}
            {!! $errors->first('metaTitle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('metaDescription *') }}
            {{ Form::textarea('metaDescription', $page->metaDescription, ['class' => 'form-control' . ($errors->has('metaDescription') ? ' is-invalid' : ''), 'placeholder' => 'Meta Description', 'rows'=>'3','required']) }}
            {!! $errors->first('metaDescription', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('Open Graph Tags(OG Tags) *') }}
            {{ Form::textarea('og_tags', $page->og_tags, ['class' => 'form-control' . ($errors->has('og_tags') ? ' is-invalid' : ''), 'placeholder' => 'OG Tags', 'rows'=>'5','required']) }}
            {!! $errors->first('og_tags', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('Schema Markup *') }}
            {{ Form::textarea('schemas', $page->schemas, ['class' => 'form-control' . ($errors->has('schemas') ? ' is-invalid' : ''), 'placeholder' => 'Schema Markup', 'rows'=>'5','required']) }}
            {!! $errors->first('schemas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- submit --}}
        <div class="form-group col-md-12">
            {{ Form::submit('Save', ['class' => 'btn btn-success']) }}
        </div>
    </div>
</section>
