@extends('admin.layout.app')

@section('title','Branch Setting')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Branch Setting</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Branch Setting</li>
        </ol>
        <a href="{{ route('branch-settings.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fa fa-plus-circle"></i> Create New
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Branch Setting') }}</h4>
        <table class="datatable table table-striped border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Key</th>
                    <th>Value</th>
                    <th>Branch</th>
                    <th width="10px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branch_settings as $key => $branch_setting)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $branch_setting->key }}</td>
                        <td>{{ $branch_setting->value }}</td>
                        <td>{{ $branch_setting->branch->name }}</td>
                        <td>@include('admin.branch_setting.actions')</td>
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
