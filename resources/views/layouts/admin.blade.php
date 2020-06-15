
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- Css Here !-->
@include('layouts.global_components.back.admin_head')

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">

  <!-- fixed-top-->
  @include('layouts.global_components.back.admin_nav')
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <!-- SideBar !-->
  @include('layouts.global_components.back.admin_sidebar')

  <!-- Dynamic Content !-->
  @yield('content')
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.global_components.back.admin_footer')
  <!-- BEGIN VENDOR JS-->
 
  @include('layouts.global_components.back.admin_scripts')
  <!-- END PAGE LEVEL JS-->
</body>
</html>