<div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action
    </button>
    <div class="dropdown-menu animated lightSpeedIn dropdown-menu-end">
        <a class="dropdown-item" href="{{ route('pages.show', $page->id) }}">
            <i class="fa fa-fw fa-eye"></i> Show
        </a>
        <a class="dropdown-item" href="{{ route('pages.edit',$page->id) }}">
            <i class="fa fa-fw fa-edit"></i> Edit
        </a>
        @if($page->status == 'UnPublish')
        <form action="{{ route('pages.update',$page->id) }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}
            {{ Form::hidden('status', 'Publish') }}
            <button type="submit" class="dropdown-item publish-confirm">
                <i class="fas fa-upload"></i> Publish
            </button>
        </form>
        @endif
        @if($page->status == 'Publish')
        <form action="{{ route('pages.update',$page->id) }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}
            {{ Form::hidden('status', 'UnPublish') }}
            <button type="submit" class="dropdown-item unpublish-confirm">
                <i class="fas fa-download"></i> UnPublish
            </button>
        </form>
        @endif
        <form action="{{ route('pages.destroy',$page->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item sa-confirm">
                <i class="fa fa-fw fa-trash"></i> Delete
            </button>
        </form>
    </div>
</div>