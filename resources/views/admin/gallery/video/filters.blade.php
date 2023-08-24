<div class="card collapse {{ !is_null($userRequest) ? 'show' : ''}}" id="filters">
    <div class="card-body">
        <form action="{{ route('gallery.video.filter')}}" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    {{ Form::label('Branch') }}
                    <select name="branch_id" class="form-control form-select">
                        <option value="">--Select--</option>
                        @foreach($filters['branch_id'] as $item)
                            <option value="{{$item->branch_id}}" {{ !is_null($userRequest) ? ($userRequest->branch_id == $item->branch_id? 'selected' : '') : ''}}>{{$item->branch->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('Category') }}
                    <select name="category_id" class="form-control form-select">
                        <option value="">--Select--</option>
                        @foreach($filters['category_id'] as $item)
                            <option value="{{$item->category_id}}" {{ !is_null($userRequest) ? ($userRequest->category_id == $item->category_id? 'selected' : '') : ''}}>{{$item->category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12 text-center">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>