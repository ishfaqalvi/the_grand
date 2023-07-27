<div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action
    </button>
    <div class="dropdown-menu animated lightSpeedIn dropdown-menu-end">
        <a class="dropdown-item" href="{{ route('contacts.show',$contact->id) }}">
            <i class="fa fa-fw fa-eye"></i> Show
        </a>
        <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item sa-confirm">
                <i class="fa fa-fw fa-trash"></i> Delete
            </button>
        </form>
    </div>
</div>