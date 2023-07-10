<div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action
    </button>
    <div class="dropdown-menu animated lightSpeedIn dropdown-menu-end">
        <a class="dropdown-item" href="{{ route('testimonials.show',$testimonial->id) }}">
            <i class="fa fa-fw fa-eye"></i> Show
        </a>
        <a class="dropdown-item" href="{{ route('testimonials.edit',$testimonial->id) }}">
            <i class="fa fa-fw fa-edit"></i> Edit
        </a>
        @if($testimonial->status == 'UnPublish')
            <form action="{{ route('testimonials.update',$testimonial->id) }}" method="POST">
                @csrf
                {{ method_field('PATCH') }}
                <input type="hidden" name="status" value="Publish">
                <button type="submit" class="dropdown-item publish-confirm">
                    <i class="fas fa-upload"></i> Publish
                </button>
            </form>
        @endif
        @if($testimonial->status == 'Publish')
            <form action="{{ route('testimonials.update',$testimonial->id) }}" method="POST">
                @csrf
                {{ method_field('PATCH') }}
                <input type="hidden" name="status" value="UnPublish">
                <button type="submit" class="dropdown-item unpublish-confirm">
                    <i class="fas fa-download"></i> UnPublish
                </button>
            </form>
        @endif
        <form action="{{ route('testimonials.destroy',$testimonial->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item sa-confirm">
                <i class="fa fa-fw fa-trash"></i> Delete
            </button>
        </form>
    </div>
</div>