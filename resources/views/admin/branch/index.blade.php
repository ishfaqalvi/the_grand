@extends('admin.layout.app')

@section('title','Branch')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Branch Managment</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Branches</li>
        </ol>
        <a href="{{ route('branches.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fa fa-plus-circle"></i> Create New
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Branches') }}</h4>
        <table class="datatable table table-striped border">
            <thead>
                <tr>
                    <th>No</th>              
                    <th>Name</th>
                    <th>Prefix</th>
                    <th>Image</th>
                    <th width="10px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branches as $key => $branch)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $branch->name }}</td>
                        <td>{{ $branch->prefix }}</td>
                        <td>{{ $branch->image }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu animated lightSpeedIn dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('branches.show',$branch->id) }}">
                                        <i class="fa fa-fw fa-eye"></i> Show
                                    </a>
                                    <a class="dropdown-item" href="{{ route('branches.edit',$branch->id) }}">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('branches.destroy',$branch->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item sa-confirm">
                                            <i class="fa fa-fw fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection