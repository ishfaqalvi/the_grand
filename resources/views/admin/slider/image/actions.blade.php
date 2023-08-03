<div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action
    </button>
    <div class="dropdown-menu animated lightSpeedIn dropdown-menu-end">
        <a class="dropdown-item" href="{{ route('sliders.image.show',$slider->id) }}">
            <i class="fa fa-fw fa-eye"></i> Show
        </a>
        <a class="dropdown-item" href="{{ route('sliders.image.edit',$slider->id) }}">
            <i class="fa fa-fw fa-edit"></i> Edit
        </a>
        @if($slider->status == 'UnPublish')
            <form action="{{ route('sliders.update',$slider->id) }}" method="POST">
                @csrf
                {{ method_field('PATCH') }}
                <input type="hidden" name="status" value="Publish">
                <button type="submit" class="dropdown-item publish-confirm">
                    <i class="fas fa-upload"></i> Publish
                </button>
            </form>
        @endif
        @if($slider->status == 'Publish')
            <form action="{{ route('sliders.update',$slider->id) }}" method="POST">
                @csrf
                {{ method_field('PATCH') }}
                <input type="hidden" name="status" value="UnPublish">
                <button type="submit" class="dropdown-item unpublish-confirm">
                    <i class="fas fa-download"></i> UnPublish
                </button>
            </form>
        @endif
        <form action="{{ route('sliders.destroy',$slider->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item sa-confirm">
                <i class="fa fa-fw fa-trash"></i> Delete
            </button>
        </form>
    </div>
</div>