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
                            <img class="m-3 mt-5" alt="logo" src="{{ $user->imageFullPath }}" style="height:180px;width:auto">

                        </div>
                    </div>
                    <div class="pricing-details">
                        <div class="pricing-item">
                            <!-- <div class="pricing-item-icon"><i class="fas fa-check"></i></div> -->
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
                        <div>Are Accounts Match?</div>
                        <div>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-check"></i></span>
                                </label>
                                <label for="">
                                    <h6>Yes</h6>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="2" class="selectgroup-input">
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
                        <textarea class="form-control" style="height:26px;"></textarea>
                    </div>

                </div>
                <div class="pricing-cta">
                    <a href="#">Send FeedBack <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <div class="pricing">
                <div class="pricing-title">
                    Twitter Account
                </div>

                <div class="pricing-padding">
                    <div class="pricing-price">
                    <div>
                            <img class="m-3 mt-5" alt="logo" src="{{ $account_data->data->profile_image_url }}" style="height:180px;width:auto">

                        </div>
                        <div><span>@</span>
                            @if($result->data)
                            {{$result->data->username}}
                            @elseif($result->error)
                            No Account
                            @endif
                        </div>
                        <div>per month</div>
                    </div>
                    <div class="pricing-details">
                        <div class="pricing-item">
                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                            <div class="pricing-item-label">
                              
                                {{$tweet}}
                                
                            </div>
                        </div>
                        <div class="pricing-item">
                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                            <div class="pricing-item-label">Core features</div>
                        </div>
                        <div class="pricing-item">
                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                            <div class="pricing-item-label">8TB storage</div>
                        </div>
                        <div class="pricing-item">
                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                            <div class="pricing-item-label">Unlimited custom domain</div>
                        </div>
                        <div class="pricing-item">
                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                            <div class="pricing-item-label">Lifetime Support</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
/*
        <div class="container mt-5">
            <div class="row mt-5 justify-content-start">

                <div class="main-sidebar sidebar-style-2 top col-4">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <h4 class="mt-5">Your Twitter Account Checker Account</h4>
                            <img class="m-3 mt-5" alt="logo" src="{{ $user->imageFullPath }}" style="height:180px;width:auto">

                            <!-- </div> -->

                            <ul class="sidebar-menu mt-5">
                                <li class="menu-header"></li>
                                <li><label for="" class="text-muted d-inline">Username:</label><a class="nav-link active d-inline" href=""> <span><i class="fas fa-at m-0"></i>{{$user->username}}</span></a></li>

                            </ul>

                    </aside>
                </div>


                <div class="col-8 top">
                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Answer</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="form-control"  name="answer" ></textarea> 
                                </div>
                            </div>
                </div>


                <!-- </div> -->
                <div class="main-sidebar-right top sidebar-style-2 col-4">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <h4 class="">Your Twitter Account</h4>

                            <img class="m-3 mt-5" alt="logo" src="{{ $user->imageFullPath }}" style="height:180px;width:auto">

                            <!-- </div> -->

                            <ul class="sidebar-menu mt-5">
                                <li class="menu-header"></li>
                                <li><label for="" class="text-muted d-inline">right:</label><a class="nav-link active d-inline" href=""> <span><i class="fas fa-at m-0"></i>{{$user->username}}</span></a></li>

                            </ul>

                    </aside>
                </div>


            </div>
        </div>
        */ ?>
<!-- </section>
</div> -->


@endsection