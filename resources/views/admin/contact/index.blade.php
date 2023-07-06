@extends('layouts.app')

@section('template_title')
    Contact
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contact') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contacts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Number</th>
										<th>Subject</th>
										<th>Description</th>
										<th>Order</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contact->name }}</td>
											<td>{{ $contact->email }}</td>
											<td>{{ $contact->number }}</td>
											<td>{{ $contact->subject }}</td>
											<td>{{ $contact->description }}</td>
											<td>{{ $contact->order }}</td>
											<td>{{ $contact->status }}</td>

                                            <td>
                                                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contacts.show',$contact->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contacts.edit',$contact->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $contacts->links() !!}
            </div>
        </div>
    </div>
@endsection
