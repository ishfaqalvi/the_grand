<div class="card collapse {{ !is_null($userRequest) ? 'show' : ''}}" id="filters">
    <div class="card-body">
        <form action="{{ route('facilities.index')}}" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    {{ Form::label('Page') }}
                    <select name="page_id" class="form-control form-select">
                        <option value="">--Select--</option>
                        @foreach($filters['page_id'] as $item)
                            <option value="{{$item->page_id}}" {{ !is_null($userRequest) ? ($userRequest->page_id == $item->page_id? 'selected' : '') : ''}}>{{$item->page->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('Status') }}
                    <select name="status" class="form-control form-select">
                        <option value="">--Select--</option>
                        @foreach($filters['status'] as $item)
                            <option value="{{$item->status}}" {{ !is_null($userRequest) ? ($userRequest->status == $item->status? 'selected' : '') : ''}}>{{$item->status}}</option>
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