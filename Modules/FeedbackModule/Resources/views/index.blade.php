@extends('layoutmodule::user.main')

@section('content')
@include('layoutmodule::user.flash')
<!-- <div class="main-content" >
    <section class="section"> -->
<div class="section-header">

    <div class="col-12 mb-4">
        <div class="hero bg-primary text-white text-center">
            <div class="hero-inner">
                <h2>&nbsp;Thank you "<span class="username">{{$user->fname}}&nbsp;{{$user->lname}}&nbsp;</span>" for your feedback</h2>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="card card-primary col-6">
        <div class="card-header">
            <h4> FEEDBACK</h4>
        </div>

        <div class="card-body">

            <div class="row justify-content-center text-center">
                <div class="form-group col-12">
                    <h3>
                        @if($feedback->is_identical == 1)
                        Congratulations, your accounts are Identical.
                        @else
                        Sorry, your accounts aren't Identical.
                        @endif
                    </h3>
                </div>
                <div class="form-group col-12">
                    <label for="lname">Your Feedback was:</label>
                    <p>{{$feedback->feedback_body}}</p>
                </div>
            </div>


        </div>
        <div class="row justify-content-center">
            <div class="form-group text-center col-3 mr-3">
                <a href="{{route('user.profile')}}" class="btn btn-primary btn-lg btn-block">
                    Back
                </a>
            </div>
            <div class="form-group text-center col-offset-5 col-3 mr-3">
                <a href="{{route('user.logout')}}" class="btn btn-primary btn-lg btn-block">
                    Logout
                </a>
            </div>
        </div>



        </form>
    </div>
</div>




@endsection