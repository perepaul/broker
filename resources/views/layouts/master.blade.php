
<!DOCTYPE html>
<html lang="en">

    @include('layouts.global_components.front.front_head')
  <body>
      <!-- Top Navigation Bar !-->
      @include('layouts.global_components.front.front_nav_banner')

      <!-- Navigation Bar !-->
	  @include('layouts.global_components.front.front_nav')
    <!-- END nav -->
    
    <!-- Slider !-->
    @yield('content_slider')


    <!--Form and Mini Banner !-->
    @yield('content_form_and_banner')

   <!-- Reuseable Dynamic Content !-->
    @yield('content')


    {{-- <hr> --}}


	<!-- Footer !-->	
    @include('layouts.global_components.front.front_footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <!-- All Js Files !-->
  @include('layouts.global_components.front.front_scripts')
    
  </body>
</html>