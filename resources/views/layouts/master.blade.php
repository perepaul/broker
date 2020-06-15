
<!DOCTYPE html>
<html lang="en">

    @include('layouts.global_components.front.front_head')
  <body>
      @include('layouts.global_components.front.front_nav_banner')
      
	  @include('layouts.global_components.front.front_nav')
    <!-- END nav -->
    
    
    @yield('content_slider')


    @yield('content_form_and_banner')

   
    @yield('content')


    {{-- <hr> --}}


		
    @include('layouts.global_components.front.front_footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  
  @include('layouts.global_components.front.front_scripts')
    
  </body>
</html>