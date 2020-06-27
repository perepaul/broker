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
