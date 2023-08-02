<div id="addVideo" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('gallery.store') }}" class="gallery" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Upload Media</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @if(auth()->user()->type == 'Main')
                        <div class="form-group col-md-6">
                            {{ Form::label('branch') }}
                            {{ Form::select('branch_id', branches(), '', ['class' => 'form-control form-select' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
                            {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
                            <small class="form-control-feedback"> Select branch </small>
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('category') }}
                            {{ Form::select('category_id', categories(), '', ['class' => 'form-control form-select' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => '--Select--','required']) }}
                            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
                            <small class="form-control-feedback"> Select category </small>
                        </div>
                        @else
                        {{ Form::hidden('branch_id', auth()->user()->branch_id) }}
                        <div class="form-group col-md-6">
                            {{ Form::label('category') }}
                            {{ Form::select('category_id', categories(auth()->user()->branch_id), '', ['class' => 'form-control form-select' . ($errors->has('category_id') ? ' is-invalid' : ''), 'required']) }}
                            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
                            <small class="form-control-feedback"> Select category </small>
                        </div>
                        @endif
                        {{ Form::hidden('type', 'Video') }}
                        <div class="form-group col-md-6">
                            {{ Form::label('order') }}
                            {{ Form::number('order', '', ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required']) }}
                            {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
                            <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
                        </div>
                        <div class="form-group">
                            {{ Form::label('video_link') }}
                            {{ Form::url('video_link', '', ['class' => 'form-control' . ($errors->has('video_link') ? ' is-invalid' : '')]) }}
                            {!! $errors->first('video_link', '<div class="invalid-feedback">:message</div>') !!}
                            <small class="form-control-feedback"> Video link </small>
                        </div>
                        <div class="form-group">
                            {{ Form::label('video_thumbnail') }}
                            {{ Form::file('video_thumbnail', ['class' => 'form-control dropify' . ($errors->has('video') ? ' is-invalid' : ''), 'accept'=> 'image/png,image/jpg,image/jpeg', 'data-height' => '450']) }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>