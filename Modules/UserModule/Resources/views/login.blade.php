@extends('layoutmodule::user.login')

@section('content')
@include('layoutmodule::user.flash')

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand ">
                <img src="{{ url('theme/img/logo.png') }}" alt="logo" class="shadow-light rounded-circle " width="100">
                <h4 class="logo_font mt-2 text-center">Twitter Account<br> Checker</h4>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Login</h4>
                </div>

                <div class="card-body">
               
                <form action="{{route('user.account.login')}}" method="POST">
                @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="username" tabindex="1" required="" autofocus="">
                            <div class="invalid-feedback">
                                Please enter your username
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required="">
                            <div class="invalid-feedback">
                                please fill in your password
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Login
                            </button>
                        </div>
                    </form>


                </div>
            </div>
            <div class="mt-5 text-muted text-center">
                Don't have an account? <a href="{{route('user.register')}}">Create One</a>
            </div>
            <div class="simple-footer">
                Copyright © Stisla 2018
            </div>
        </div>
    </div>
</div>
@endsection