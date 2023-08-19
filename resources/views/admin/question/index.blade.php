@extends('admin.layout.app')

@section('title','Questions')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Question</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Question</li>
        </ol>
        @if(auth()->user()->type == 'Main')
        <a class="btn btn-info text-white m-l-15" data-bs-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-filter"></i> Filter Data
        </a>
        @endif
        <a href="{{ route('questions.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fa fa-plus-circle"></i> Create New
        </a>
    </div>
</div>
@endsection

@section('content')
@include('admin.question.filters')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Question') }}</h4>
        <table class="datatable table table-striped border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Order</th>                      
                    <th>Branch</th>
                    <th>Status</th>
                    <th width="10px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as  $key => $question)
                    <tr class="align-items-center">
                        <td>{{ ++$key }}</td> 
                        <td>{{ $question->title }}</td>
                        <td>{{ $question->order }}</td>
                        <td>{{ $question->branch?->name }}</td>
                        <td>{{ $question->status }}</td>
                        <td>@include('admin.question.actions')</td>
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
        $(".publish-confirm").click(function (event) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "This service will be displayed on website after this!",
                type: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Publish it!'
            }).then((result) => {
                if (result.value === true)  $(this).closest("form").submit();
            });
        });
        $(".unpublish-confirm").click(function (event) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "This service will not displayed on website after this!",
                type: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, UnPublish it!'
            }).then((result) => {
                if (result.value === true)  $(this).closest("form").submit();
            });
        });
    });
</script>
@endsection