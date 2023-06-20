
@extends('admin.layout.app')

@section('title','Sliders')

@section('breadcrumb')
<div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Sliders</h4>
</div>
<div class="col-md-7 align-self-center text-end">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Sliders</li>
        </ol>
        @can('menu-create')
        <a href="{{ route('grand-sliders.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fa fa-plus-circle"></i> Create New
        </a>
        @endcan
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ __('Sliders') }}</h4>
        <table class="datatable table table-striped border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Order</th>
                    <th>Description</th>
                    <th width="10px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($grandSliders as  $key => $grandSlider)
                    <tr>
                        <td>{{ ++$i }}</td>         
                        <td>{{ $grandSlider->title }}</td>
                        <td>
                            <img style="width: 100%; display: block;" src="{{asset('upload/images/gallery/'.$grandSlider->image)}}" alt="image"/><div class="mask">
                        </td>
                        <td>{{ $grandSlider->order }}</td>
                        <td>{{ $grandSlider->description }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu animated lightSpeedIn dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('grand-sliders.show',$grandSlider->id) }}">
                                        <i class="fa fa-fw fa-eye"></i> Show
                                    </a>
                                    <a class="dropdown-item" href="{{ route('grand-sliders.edit',$grandSlider->id) }}">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('grand-sliders.destroy',$grandSlider->id) }}" method="POST">
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
    {!! $grandSliders->links() !!}
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