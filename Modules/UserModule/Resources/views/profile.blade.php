@extends('layoutmodule::user.main')

@section('content')
@include('layoutmodule::user.flash')
<!-- <div class="main-content" >
    <section class="section"> -->
<div class="section-header">

    <div class="col-12 mb-4">
        <div class="hero bg-primary text-white text-center">
            <div class="hero-inner">
                <h2><i class="fas fa-handshake icon"></i>&nbsp;Welcome Back,<span class="username">{{$user->fname}}&nbsp;{{$user->lname}}&nbsp;</span>!</h2>
            </div>
        </div>
    </div>
</div>

<div class="section-body">

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="pricing">
                <div class="pricing-title">
                    APP Account
                </div>
                <div class="pricing-padding">
                    <div class="pricing-price">
                        <div>
                            <img class="m-3 mt-5" alt="logo" src="{{ $user->imageFullPath }}" style="height:80px;width:auto">
                        </div>
                    </div>
                    <div class="pricing-details">
                        <div class="pricing-item">
                            <div class="pricing-item-label">
                                <h5><i class="fas fa-at m-0"></i>{{$user->username}}</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <div class="pricing pricing-highlight">
                <div class="pricing-title">
                    Feedback
                </div>
                <div class="pricing-padding">
                    <div class="pricing-price">
                        <form action="{{route('feedback.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div>Are Accounts Match?</div>
                            <div>
                                <div class="selectgroup selectgroup-pills">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="is_identical" value="1" class="selectgroup-input" checked="">
                                        <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-check"></i></span>
                                    </label>
                                    <label for="">
                                        <h6>Yes</h6>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="is_identical" value="0" class="selectgroup-input">
                                        <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-times"></i></span>
                                    </label>
                                    <label for="">
                                        <h6>No</h6>
                                    </label>

                                </div>
                            </div>
                    </div>
                    <div class="form-group text-left">
                        <label>FeedBack</label>
                        <textarea class="form-control" name="feedback_body" style="height:26px;"></textarea>
                    </div>
                </div>
                <div class="pricing-cta">
                    <button class="btn btn-primary btn-lg btn-block">Send FeedBack <i class="fas fa-arrow-right"></i></button>
                </div>
            </form>

            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <div class="pricing">
                <div class="pricing-title">
                    Twitter Account
                </div>
                @isset($result)
                <div class="pricing-padding">
                    <div class="pricing-price">
                        <div>
                            <img class="m-3 mt-5" alt="logo" src="{{ $account_data->data->profile_image_url }}" style="height:80px;width:auto">
                        </div>
                    </div>
                    <div class="pricing-details">
                        <div class="pricing-item">
                            <div class="pricing-item-label">
                                <h5>
                                    <i class="fas fa-at m-0"></i>
                                    {{$result->data->username}}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricing-details">
                    <div class="pricing-item">
                        <div class="activities">
                            <div class="activity">
                                <div class="activity-icon bg-primary text-white shadow-primary">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                                <div class="activity-detail">
                                    <div class="mb-2">
                                        @if(($tweet != ''))
                                        <span class="text-job text-primary">
                                            {{date('d-m-Y H:i:s', strtotime($tweet->created_at))}}</span>

                                        <div class="float-right dropdown">
                                        </div>
                                    </div>
                                    <p>{{$tweet->text}}</p>
                                    @else
                                    <p>No Tweets</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="pricing-padding">
                    <div class="pricing-price">
                        <div>
                            <img class="m-3 mt-5" alt="logo" src="{{ url('theme/img/logo.png') }}" style="height:80px;width:auto">
                        </div>
                    </div>
                    <div class="pricing-details">
                        <div class="pricing-item">
                            <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                            <div class="pricing-item-label">
                                <h5>No Account Found
                            </div>
                        </div>
                    </div>
                </div>

                @endisset
            </div>
        </div>
    </div>
</div>
</div>
</div>



@endsection