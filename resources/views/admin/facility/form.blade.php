<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="form-group">
                {{ Form::label('page') }}
                {{ Form::select('page_id', homePages(), $facility->page_id, ['class' => 'form-control form-select' . ($errors->has('page_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--']) }}
                {!! $errors->first('page_id', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Example: ( Select Page Name ) </small>
            </div>
            <div class="form-group">
                {{ Form::label('title') }}
                {{ Form::text('title', $facility->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
                {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Example: (Restaurant ...) </small>
            </div>
            <div class="form-group">
                {{ Form::label('icon') }}
                {{ Form::text('icon', $facility->icon, ['class' => 'form-control' . ($errors->has('icon') ? ' is-invalid' : ''), 'placeholder' => 'Icon']) }}
                {!! $errors->first('icon', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback">Example: (flaticon-world) <a href="https://www.flaticon.com" target="_blank"> Flaticon Icons</a></small>
            </div>
            <div class="form-group">
                {{ Form::label('order') }}
                {{ Form::number('order', $facility->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required','min'=>'1']) }}
                {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
            </div>  
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group col-md-12">
            {{ Form::label('image') }}
            {{ Form::file('image', ['class' => 'form-control dropify' . ($errors->has('image') ? ' is-invalid' : ''), 'accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => isset($facility->image) ? asset($facility->image) : '', 'data-height' => '350']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-control-feedback"> Image for facility size(width = 45px , height = 45px)</small>
        </div>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $facility->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description','rows' => '4','required']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Example: ( Detail .... ) </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>