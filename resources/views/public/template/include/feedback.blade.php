<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" id="exampleModalLabel">{{ __(dynamicString('feedback_heading',$language->id)) }}</h4>
                <p>{{ __(dynamicString('required_email',$language->id)) }}</p>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if($message = Session::get('feedbackMessage'))
                    <div class="alert alert-dismissible alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form method="POST" action="{{ route('feedback.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required="required"></textarea>
                        </div>
                        <div class="form-group col-lg-6 mt-3">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name*" name="name" required="required">
                        </div>
                        <div class="form-group col-lg-6 mt-3 ps-2">
                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email*" name="email" required="required">
                        </div>
                        <button type="submit" class="btn btn-dark mt-3">{{ __(dynamicString('submit_comment',$language->id)) }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>