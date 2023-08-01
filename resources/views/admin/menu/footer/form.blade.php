<div class="row">
    @if(auth()->user()->type == 'Main')
    <div class="form-group col-md-6">
        {{ Form::label('branch') }}
        {{ Form::select('branch_id', branches(), $menu->branch_id, ['class' => 'form-control form-select' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Select branch </small>
    </div>
    @else
        {{ Form::hidden('branch_id', auth()->user()->branch_id) }}
    @endif
    {{ Form::hidden('type', 'Footer') }}
    <div class="form-group col-md-6">
        {{ Form::label('title') }}
        {{ Form::text('title', $menu->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title','required']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Title of footer menu </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('url') }}
        {{ Form::text('url', $menu->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url','required']) }}
        {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Page url </small>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('order') }}
        {{ Form::number('order', $menu->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','min' => '1','required']) }}
        {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-control-feedback"> Order number </small>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>