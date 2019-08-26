<div class="row justify-content-center">
    <div class="col-xs-12 mt-3">
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Something went wrong</strong>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
