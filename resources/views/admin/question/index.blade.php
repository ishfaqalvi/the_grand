@extends('admin.layout.app')

@section('title','Service')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Question</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Question</li>
        </ol>
        <a href="{{ route('services.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fa fa-plus-circle"></i> Create New
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Question') }}</h4>
        <table class="datatable table table-striped border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Order</th>                      
                    <th>Branch</th>
                    <th>Status</th>
                    <th width="10px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as  $key => $service)
                    <tr class="align-items-center">
                        <td>{{ ++$key }}</td>  
                        <td><img src="{{ url($service->image) }}" style="height: 40px; width: 75px;"></td>
                        <td>{{ $service->heading }}</td>
                        <td>{{ $service->order }}</td>
                        <td>{{ $service->branch?->name }}</td>
                        <td>{{ $service->status }}</td>
                        <td>@include('admin.service.actions')</td>
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












@extends('layouts.app')

@section('template_title')
    Question
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Question') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('questions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Branch Id</th>
										<th>Title</th>
										<th>Description</th>
										<th>Order</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($questions as $question)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $question->branch_id }}</td>
											<td>{{ $question->title }}</td>
											<td>{{ $question->description }}</td>
											<td>{{ $question->order }}</td>
											<td>{{ $question->status }}</td>

                                            <td>
                                                <form action="{{ route('questions.destroy',$question->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('questions.show',$question->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('questions.edit',$question->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $questions->links() !!}
            </div>
        </div>
    </div>
@endsection
