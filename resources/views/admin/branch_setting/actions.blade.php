<div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action
    </button>
    <div class="dropdown-menu animated lightSpeedIn dropdown-menu-end">
        <a class="dropdown-item" href="{{ route('branch-settings.show',$branch_setting->id) }}">
            <i class="fa fa-fw fa-eye"></i> Show
        </a>
        <a class="dropdown-item" href="{{ route('branch-settings.edit',$branch_setting->id) }}">
            <i class="fa fa-fw fa-edit"></i> Edit
        </a>
        <form action="{{ route('branch-settings.destroy',$branch_setting->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item sa-confirm">
                <i class="fa fa-fw fa-trash"></i> Delete
            </button>
        </form>
    </div>
</div>
