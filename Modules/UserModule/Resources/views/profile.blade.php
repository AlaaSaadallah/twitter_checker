@extends('layoutmodule::user.main')

@section('content')
@include('layoutmodule::user.flash')
<div class="main-content">
    <section class="section">
        <div class="row mx-0">
            <nav class="navbar">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white text-center">
                        <div class="hero-inner">
                            <h2><i class="fas fa-handshake icon"></i>&nbsp;Welcome Back,<span class="username">{{$user->fname}}&nbsp;{{$user->lname}}&nbsp;</span>!</h2>
                        </div>
                    </div>
                </div>
        </div>
        </nav>


        <div class="main-sidebar sidebar-style-2">
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
        <div class="main-sidebar-right  sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                <h4 class="mt-5">Your Twitter Account</h4>

                    <img class="m-3 mt-5" alt="logo" src="{{ $user->imageFullPath }}" style="height:180px;width:auto">

                <!-- </div> -->
              
                <ul class="sidebar-menu mt-5">
                    <li class="menu-header"></li>
                    <li><label for="" class="text-muted d-inline">right:</label><a class="nav-link active d-inline" href=""> <span><i class="fas fa-at m-0"></i>{{$user->username}}</span></a></li>
                  
                </ul>
            
            </aside>
        </div>
    </section>
</div>
@endsection