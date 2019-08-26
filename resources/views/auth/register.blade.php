@extends('auth.base')

@section('content')
<div class="container">
    @if($errors -> any())
    @include('partials/error-flash')
    @endif
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="/register" method="POST" class="river-form">
                            @csrf
                            <div class="form-group">
                                <input name="name" type="text" class="form-control form-control-river-form" id="exampleFirstName" placeholder="Names" required />
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control form-control-river-form" id="exampleInputEmail" placeholder="Email Address" required />
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name="password" type="password" class="form-control form-control-river-form" id="exampleInputPassword" placeholder="Password" required />
                                </div>
                                <div class="col-sm-6">
                                    <input name="password_confirmation" type="password" class="form-control form-control-river-form" id="exampleRepeatPassword" placeholder="Repeat Password" required />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-river-form btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr />
                        <div class="text-center">
                            <a class="small" href="#">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection