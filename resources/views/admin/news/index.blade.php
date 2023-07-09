@extends('admin.layout.app')

@section('title','News')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">News</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">News</li>
        </ol>
        <a href="{{ route('news.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fa fa-plus-circle"></i> Create New
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('News') }}</h4>
        <table class="datatable table table-striped border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Date</th>
                    <th>Order</th>                      
                    <th>Branch</th>
                    <th>Status</th>
                    <th width="10px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as  $key => $news)
                    <tr class="align-items-center">
                        <td>{{ ++$i }}</td>  
                        <td><img src="{{ url('upload/images/news/'.$news->image) }}" style="height: 40px; width: 75px;"></td>
                        <td>{{ $news->heading }}</td>
                        <td>{{ $news->date }}</td>
                        <td>{{ $news->order }}</td>
                        <td>{{ $news->branch->name }}</td>
                        <td>{{ $news->status }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu animated lightSpeedIn dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('news.show',$news->id) }}">
                                        <i class="fa fa-fw fa-eye"></i> Show
                                    </a>
                                    <a class="dropdown-item" href="{{ route('news.edit',$news->id) }}">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('news.destroy',$news->id) }}" method="POST">
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

