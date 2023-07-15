<div class="form-body">
    <h3 class="box-title">General Info</h3>
    <hr class="m-t-0 m-b-40">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('type') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::select('type', ['Main Branch' => 'Main Branch', 'Sub Branch' => 'Sub Branch'], $branch->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type','required','placeholder' => '--Select--']) }}
                    {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Name of branch </small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('name') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('name', $branch->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name','required']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Name of branch </small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('url') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('url', $branch->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url','required']) }}
                    {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Url of branch </small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('thumbnail') }}    
                </div>
                <div class="col-md-9">
                    
                    {{ Form::file('thumbnail', ['class' => 'form-control dropify' . ($errors->has('thumbnail') ? ' is-invalid' : ''), $branch->thumbnail ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => isset($branch->thumbnail) ? asset($branch->thumbnail) : '']) }}
                    {!! $errors->first('thumbnail', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Thumbnail of branch size(545 * 360)</small>
                </div>
            </div>
        </div>
    </div>
    <h3 class="box-title">Website Info</h3>
    <hr class="m-t-0 m-b-40">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('logo') }}    
                </div>
                <div class="col-md-9">
                    @php($logo = isset($branch->id) ? settings($branch->id,'logo') : '')
                    {{ Form::file('settings[logo]', ['class' => 'form-control dropify' . ($errors->has('logo') ? ' is-invalid' : ''), $logo ? '': 'required','accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => asset($logo)]) }}
                    {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Logo of branch size(160 * 38)</small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('copyright') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('settings[copyright]', isset($branch->id) ? settings($branch->id,'copyright') : '', ['class' => 'form-control' . ($errors->has('copyright') ? ' is-invalid' : ''), 'placeholder' => 'Copyright','required']) }}
                    {!! $errors->first('copyright', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Copyright of branch </small>
                </div>
            </div>
        </div>
    </div>
    <h3 class="box-title">Contact Info</h3>
    <hr class="m-t-0 m-b-40">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('phone') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('settings[phone]', isset($branch->id) ? settings($branch->id,'phone') : '', ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone','required']) }}
                    {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Phone of branch </small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('email') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::email('settings[email]', isset($branch->id) ? settings($branch->id,'email') : '', ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email','required']) }}
                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Email of branch </small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('address') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('settings[address]', isset($branch->id) ? settings($branch->id,'address') : '', ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address','required']) }}
                    {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Address of branch </small>
                </div>
            </div>
        </div>        
    </div>
    <h3 class="box-title">Social Links Info</h3>
    <hr class="m-t-0 m-b-40">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('instagram') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('settings[instagram]', isset($branch->id) ? settings($branch->id,'instagram') : '', ['class' => 'form-control' . ($errors->has('instagram') ? ' is-invalid' : ''), 'placeholder' => 'Instagram']) }}
                    {!! $errors->first('instagram', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Instagram link of branch </small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('twitter') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('settings[twitter]', isset($branch->id) ? settings($branch->id,'twitter') : '', ['class' => 'form-control' . ($errors->has('twitter') ? ' is-invalid' : ''), 'placeholder' => 'Twitter']) }}
                    {!! $errors->first('twitter', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> twitter link of branch </small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('youtube') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('settings[youtube]', isset($branch->id) ? settings($branch->id,'youtube') : '', ['class' => 'form-control' . ($errors->has('youtube') ? ' is-invalid' : ''), 'placeholder' => 'Youtube']) }}
                    {!! $errors->first('youtube', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Youtube link of branch </small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('facebook') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('settings[facebook]', isset($branch->id) ? settings($branch->id,'facebook') : '', ['class' => 'form-control' . ($errors->has('facebook') ? ' is-invalid' : ''), 'placeholder' => 'Facebook']) }}
                    {!! $errors->first('facebook', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Facebook link of branch </small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="control-label text-end col-md-3">
                    {{ Form::label('pinterest') }}    
                </div>
                <div class="col-md-9">
                    {{ Form::text('settings[pinterest]', isset($branch->id) ? settings($branch->id,'pinterest') : '', ['class' => 'form-control' . ($errors->has('pinterest') ? ' is-invalid' : ''), 'placeholder' => 'Pinterest']) }}
                    {!! $errors->first('pinterest', '<div class="invalid-feedback">:message</div>') !!}
                    <small class="form-control-feedback"> Pinterest link of branch </small>
                </div>
            </div>
        </div>   
    </div>
    <h3 class="box-title">About</h3>
    <hr class="m-t-0 m-b-40">
    <div class="form-group row">
        <div class="control-label text-end col-md-2">
            {{ Form::label('description') }}    
        </div>
        <div class="col-md-10">
            {{ Form::textarea('settings[description]', isset($branch->id) ? settings($branch->id,'description') : '', ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description','rows' => '3','required']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-control-feedback"> Description of branch </small>
        </div>
    </div>
    <hr>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-success text-white">Submit</button>
                        <a href="{{ route('branches.index') }}" type="button" class="btn btn-inverse">Cancel</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6"> </div>
        </div>
    </div>
</div>