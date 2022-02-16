@extends('layoutmodule::user.login')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="login-brand ">
                <!-- <div class="d-inline "> -->
                <img src="{{ url('theme/img/logo.png') }}" alt="logo" class="shadow-light rounded-circle " width="100">
                <!-- </div> -->
                <!-- <div class="col-7 logo_font"> -->
                <h4 class="logo_font mt-2 text-center">Twitter Account<br> Checker</h4>
                <!-- </div> -->
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Register</h4>
                </div>

                <div class="card-body">
                <form action="{{--route('admin.categories.store')--}}" method="POST" enctype="multipart/form-data">
            @csrf
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="fname">First Name</label>
                                <input id="fname" type="text" class="form-control" name="fname" required="" autofocus="">
                            </div>
                            <div class="form-group col-6">
                                <label for="lname">Last Name</label>
                                <input id="lname" type="text" class="form-control" name="lname" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="username">Username</label>
                                <input id="username" type="email" class="form-control" name="username" required="">
                            </div>

                            <div class="form-group col-6">
                                <label for="password" class="d-block">Password</label>
                                <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="phone">Phone</label>
                                <input id="phone" type="text" class="form-control" name="phone" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="gender">Gender</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="gender" value="m" class="selectgroup-input" checked="">
                                        <span class="selectgroup-button"><i class="fas fa-male"></i> &nbsp; Male</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="gender" value="f" class="selectgroup-input">
                                        <span class="selectgroup-button"><i class="fas fa-female"></i> &nbsp;Female</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label>Profile Image</label>
                                <input type="file" class="form-control" id="img" name="profile_image" value=" ">
                            </div>
                        </div>

                </div>
                <div class="row justify-content-end">
                    <div class="form-group text-center col-3">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Register
                        </button>
                    </div>
                </div>



                </form>
            </div>
        </div>
        <div class="simple-footer">
            Copyright © Stisla 2018
        </div>
    </div>
</div>
</div>
@endsection