
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark bg-cyan navbar-shadow navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item ">
                    <a class="navbar-brand" href="/">
                        <img class="brand-logo" alt="" src="{{asset('assets/img/logo/logo.png')}}"
                            style="width:70px;">
                    </a>
                </li>

                <li class="dropdown-user nav-item d-md-none float-right">
                    <a class="mt-1 nav-link dropdown-user-link" href="#">
                        <i class="ft-power text-danger text-bold-700" style="font-size:18px;"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                            href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        @if (auth()->check())
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1">Hello,
                                <span class="user-name text-bold-700">{{auth()->user()->firstname}}</span>
                            </span>
                            <span class="avatar avatar-online">
                                <img src="{{asset(config('constants.profile_image_dir').auth()->user()->image)}}" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{route('profile')}}"><i
                                    class="ft-user"></i>
                                Edit Profile</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="ft-power"></i> Logout</a>
                                    <form action="{{route('logout')}}" id="logout-form" style="display: none;" method="post">
                                        @csrf
                                    </form>
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
