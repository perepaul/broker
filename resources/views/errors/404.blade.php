{{-- @if (auth()->check()===true)
@extends('layouts.admin')

@section('content')
<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-md-4 col-10 p-0">
        <div class="card-header bg-transparent border-0">
          <h2 class="error-code text-center mb-2">404</h2>
          <h3 class="text-uppercase text-center">Page Not Found</h3>
        </div>
        <div class="card-content">
          <div class="row py-2">
            <div class="col-12 col-sm-6 col-md-6">
              <a href="/" class="btn btn-primary btn-block"><i class="ft-home"></i> Back to Home</a>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
              <a href="#" class="btn btn-danger btn-block"><i class="ft-search"></i>  Advanced search</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
@else --}}

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Piptradesway</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('assets/front/style.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
        <!-- modernizr css -->
        <script src="{{asset('assets/front/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>

    <body>

        <div id="preloader">
            <div id="status"><img src="/assets/front/images/banner/loader.gif" id="preloader_image" alt="loader">
            </div>
        </div>
        <section class="about-area pd-t70 pd-b100 jarallax bg-img " style="height: 100%">
        <div class="container ">
               <div class="col-6 align-middle">
                  <div class="about-content text-center" >
                     <h2 class="f-40 fw-400">Oops!</h2>
                     <div class="mt-30">
                         <p>We were unable to find that page</p>
                         <a href="/" class="btn btn-primary">Go back home</a>
                     </div>
                  </div>
               </div>
        </div>
        </section>

    </body>

    <script src="{{asset('assets/front/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    <!-- plugins js -->
    <script src="{{asset('assets/front/js/plugins.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('assets/front/js/main.js')}}"></script>
</html>
{{-- @endif --}}

