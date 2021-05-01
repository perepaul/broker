<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- Css Here !-->
@include('layouts.global_components.back.admin_head')

<body class="vertical-layout vertical-compact-menu 2-columns menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-compact-menu" data-col="2-columns">
    <!-- fixed-top-->
    @include('layouts.global_components.back.admin_nav')
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- SideBar !-->
    @include('layouts.global_components.back.admin_sidebar')
    @if(!auth()->user()->is_admin)
    <div class="cen">
        <a href="https://wa.me/{{format_phone_number(config('constants.phone_number'))}}" class="phone bg-danger d-block text-white">
            <i class="la la-whatsapp text-sm"></i>
               {{config('constants.phone_number')}}
        </a>
    </div>
    @endif
    <!-- Dynamic Content !-->
    <div class="app-content content">
        <div class="content-wrapper">

            @yield('content')

        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('layouts.global_components.back.admin_footer')
    <!-- BEGIN VENDOR JS-->

    @include('layouts.global_components.back.admin_scripts')
    <!-- END PAGE LEVEL JS-->

    @include('layouts.notify')
</body>

</html>
