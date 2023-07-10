<div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action
    </button>
    <div class="dropdown-menu animated lightSpeedIn dropdown-menu-end">
        <a class="dropdown-item" href="{{ route('users.show',$user->id) }}">
            <i class="fa fa-fw fa-eye"></i> Show
        </a>
        <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}">
            <i class="fa fa-fw fa-edit"></i> Edit
        </a>
        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item sa-confirm">
                <i class="fa fa-fw fa-trash"></i> Delete
            </button>
        </form>
    </div>
</div>