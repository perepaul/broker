<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="
    <meta name="keywords"
        content="">
    <meta name="author" content="">
    <title>
        Crypto and Forex
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset(config('constants.favicon'))}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/back/app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/back/app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/back/app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/back/app-assets/css/app.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/back/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/back/app-assets/css/core/colors/palette-gradient.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/back/app-assets/vendors/css/cryptocoins/cryptocoins.css')}}">
    --}}
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/back/app-assets/css/pages/login-register.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/back/assets/css/style.css')}}">
    <!-- END Custom CSS-->

    {{-- my custom styles --}}
    <link rel="stylesheet" href="{{asset('css/custom-user.css')}}" type="text/css">
</head>

<body class="bg-dark">

    <div class="app-content content">
        @yield('content')
    </div>


    <script src="{{asset('assets/back/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('assets/back/app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/back/app-assets/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript">
    </script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{asset('assets/back/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/back/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/back/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/back/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript')}}">
    </script>
    <script src="{{asset('assets/back/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript')}}">
    </script>

    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('assets/back/app-assets/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript">
    </script>

    <script src="{{asset('js/custom-user.js')}}"></script>

    @include('layouts.notify')
</body>

</html>
