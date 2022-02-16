<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{--route('admin.dashboard')--}}">
                <img class="m-3" alt="logo" src="{{ $user->imageFullPath }}" style="height:80px;width:auto">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{--route('admin.dashboard')--}}">Sndok</a>
        </div>
        <ul class="sidebar-menu mt-5">
            <li class="menu-header"></li>
            <li><a class="nav-link active" href="{{--route('admin.dashboard')--}}"><i class="fas fa-fire"></i> <span>{{ __('messages.dashboard') }}</span></a></li>

            <!-- <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                    <li class=active><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
            </li> -->
            <!-- <li class="menu-header">{{-- __('messages.cities') --}}</li> -->
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-map-marker-alt"></i> <span>{{ __('messages.cities') }}</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{--route('admin.cities')--}}">List All Cities</a></li>
                    <li><a class="nav-link" href="{{--route('admin.cities.add')--}}">Add New City</a></li>
                </ul>
            </li>

            <li class="menu-header">{{-- __('messages.categories') --}}</li>
            <li class="dropdown">
                <span class="beep"></span>
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>{{ __('messages.categories') }}</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{--route('admin.categories')--}}">List All Categories</a></li>
                    <li><a class="nav-link" href="{{--route('admin.categories.add')--}}">Add New Category</a></li>
                </ul>
            </li>

            
                     <!-- <li><a class="nav-link" href="layout-transparent.html">Accept Supplier</a></li> -->
                 </ul>
             </li>
        </ul>
        <!-- 
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div> -->
    </aside>
</div>