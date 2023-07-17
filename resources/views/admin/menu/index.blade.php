@extends('admin.layout.app')

@section('title','Menu')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Menus</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Menus</li>
        </ol>
        <a href="{{ route('menus.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fa fa-plus-circle"></i> Create New
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Menus') }}</h4>
        <table class="datatable table table-striped border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Branch</th>
                    <th>Type</th>
                    <th>Title</th>
                    <th>Parent</th>
                    <th>URL</th>
                    <th>Order</th>
                    <th width="10px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as  $key => $menu)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $menu->branch->name }}</td>
                        <td>{{ $menu->type }}</td>
                        <td>{{ $menu->title }}</td>
                        <td>
                            @if($menu->parent)
                                {{ $menu->parent->title }}
                            @endif
                        </td>
                        <td>{{ $menu->url }}</td>
                        <td>{{ $menu->order }}</td>
                        <td>@include('admin.menu.actions')</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function () {
        $(".datatable").DataTable();
        $(".sa-confirm").click(function (event) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value === true)  $(this).closest("form").submit();
            });
        });
    });
</script>
@endsection