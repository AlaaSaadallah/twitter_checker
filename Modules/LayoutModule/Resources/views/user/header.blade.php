<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow" style="min-height: 6rem;">
        <div class="navbar-wrapper">
                <div class="navbar-header">
                        <ul class="nav navbar-nav flex-row">
                                <li class="nav-item mobile-menu d-md-none mr-auto">
                                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                                <i class="ft-menu font-large-1">
                                                </i>
                                        </a>
                                </li>
                                <li class="nav-item">
                                        <a class="navbar-brand" href="{{ route('admin.dashboard')}}">
                                                <img class="brand-logo" alt="logo"
                                                        src="{{ url('admin_assets/assets/images/logo.png') }}" style="height:60px;width:auto">
                                                {{-- <h3 class="brand-text">Map Souq</h3> --}}
                                        </a>
                                </li>
                                <li class="nav-item d-md-none">
                                        <a class="nav-link open-navbar-container" data-toggle="collapse"
                                                data-target="#navbar-mobile">
                                                <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                </li>
                        </ul>
                </div>
                <div class="navbar-container content">
                        <div class="collapse navbar-collapse" id="navbar-mobile">
                                <ul class="nav navbar-nav mr-auto float-left">

                                </ul>
                                <ul class="nav navbar-nav float-right">

                                        <li class="dropdown dropdown-user nav-item">
                                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                                        data-toggle="dropdown">
                                                        <span class="avatar avatar-online">
                                                                <img src="{{ url('admin_assets/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                                                        alt="admin">
                                                                {{-- <i></i> --}}
                                                        </span>
                                                        <span class="user-name">@if(auth()->guard('admin')->user()){{auth()->guard('admin')->user()->name}}@endif</span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                        {{-- <a href="#" class="dropdown-item">
                                                                <i class="icon-head"></i>
                                                                Edit Profile
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                                <i class="icon-mail6"></i>
                                                                My Inbox
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                                <i class="icon-clipboard2"></i>
                                                                Task
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                                <i class="icon-calendar5"></i>
                                                                Calender
                                                        </a>
                                                        <div class="dropdown-divider">
                                                        </div> --}}
                                                        <a href="{{route('admin.changePassword')}}" class="dropdown-item">
                                                                <i class="icon-mail6"></i>
                                                                {{ __('messages.change_password') }}
                                                        </a>
                                                        <a href="{{url('/admin/logout')}}" class="dropdown-item">
                                                                <i class="ft-power"></i>
                                                                {{ __('messages.logout') }}
                                                        </a>
                                                </div>
                                        </li>
                                </ul>
                        </div>
                </div>
        </div>
</nav>