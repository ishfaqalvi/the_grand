<div id="editImage{{ $key }}" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('gallery.update',$image->id) }}" class="gallery" role="form" enctype="multipart/form-data">
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
                            {{ Form::number('order', $image->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order','required']) }}
                            {!! $errors->first('order', '<div class="invalid-feedback">:message</div>') !!}
                            <small class="form-control-feedback"> Example: (1 , 2 , 3, 4 , .....) </small>
                        </div>
                        <div class="form-group">
                            {{ Form::label('image') }}
                            {{ Form::file('image', ['class' => 'form-control dropify' . ($errors->has('image') ? ' is-invalid' : ''), 'accept'=> 'image/png,image/jpg,image/jpeg','data-default-file' => isset($image->image) ? asset('upload/images/gallery/images/original/'.$image->image) : '', 'data-height' => '400']) }}
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