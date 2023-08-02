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
                {{ Form::text('title', $category->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
                {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Title of category </small>
            </div>
            <div class="form-group col-md-12">
                {{ Form::label('link') }}
                {{ Form::text('link', $category->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''), 'placeholder' => 'Link']) }}
                {!! $errors->first('link', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Category link url </small>
            </div>
            <div class="form-group col-md-12">
                {{ Form::label('link_title') }}
                {{ Form::text('link_title', $category->link_title, ['class' => 'form-control' . ($errors->has('link_title') ? ' is-invalid' : ''), 'placeholder' => 'Link Title']) }}
                {!! $errors->first('link_title', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Category link title </small>
            </div>
            <div class="form-group col-md-6">
               {{ Form::label('label') }}
                {{ Form::text('label', $category->label, ['class' => 'form-control' . ($errors->has('label') ? ' is-invalid' : ''), 'placeholder' => 'Label']) }}
                {!! $errors->first('label', '<div class="invalid-feedback">:message</div>') !!}
                <small class="form-control-feedback"> Label of category </small>
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('order') }}
                {{ Form::number('order', $category->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required']) }}
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
