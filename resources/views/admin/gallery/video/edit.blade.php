<div id="editVideo{{ $key }}" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('gallery.update',$video->id) }}" class="gallery" role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Update Media</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            {{ Form::label('order') }}
                            {{ Form::number('order', $video->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required']) }}
                            {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
                            <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('video_link') }}
                            {{ Form::url('video_link', $video->video_link, ['class' => 'form-control' . ($errors->has('video_link') ? ' is-invalid' : '')]) }}
                            {!! $errors->first('video_link', '<div class="invalid-feedback">:message</div>') !!}
                            <small class="form-control-feedback"> Video link </small>
                        </div>
                        <div class="form-group">
                            {{ Form::label('video_thumbnail') }}
                            {{ Form::file('video_thumbnail', ['class' => 'form-control dropify' . ($errors->has('video_thumbnail') ? ' is-invalid' : ''), 'accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => isset($video->video_thumbnail) ? asset('upload/images/gallery/thumbnail/original/'.$video->video_thumbnail) : '', 'data-height' => '400']) }}
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