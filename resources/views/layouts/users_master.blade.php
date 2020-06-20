
<!DOCTYPE html>
<html lang="en">


@include('layouts.global_components.users.users_head')
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
    @include('layouts.global_components.users.users_topbar')
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

       @include('layouts.global_components.users.users_sidebar')
        <!--  SIDEBAR - END -->

        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

               @yield('content_header')
               
                @yield('content')


            
                <div class="clearfix"></div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
        </section>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->

    @include('layouts.global_components.users.users_scripts')

</body>


<!-- Mirrored from cryptodash.netlify.app/html/index-crypto-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2020 21:06:53 GMT -->
</html>