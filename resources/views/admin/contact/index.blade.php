@extends('admin.layout.app')

@section('title','Contacts')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Contacts</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Contacts</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Contacts') }}</h4>
        <table class="datatable table table-striped border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Branch</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Subject</th>
                    <th width="10px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $key => $contact)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $contact->branch->name }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->number }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>@include('admin.contact.actions')</td>
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