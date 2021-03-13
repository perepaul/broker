<script src="{{asset('assets/front/js/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- tether js -->
<script src="{{asset('assets/front/js/tether.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{asset('assets/front/js/jquery.meanmenu.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{asset('assets/front/js/jquery-ui.min.js')}}"></script>
<!-- easypiechart js -->
<script src="{{asset('assets/front/js/jquery.easypiechart.min.js')}}"></script>
<!-- particles js -->
<!-- wow js -->
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<!-- smooth-scroll js -->
<script src="{{asset('assets/front/js/smooth-scroll.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('assets/front/js/plugins.js')}}"></script>
<!-- EChartJS JavaScript -->
<script src="{{asset('assets/front/js/echarts-en.min.js')}}"></script>
<script src="{{asset('assets/front/js/echarts-liquidfill.min.js')}}"></script>
<script src="{{asset('assets/front/js/vc_round_chart.min.js')}}"></script>
<script src="{{asset('assets/front/js/videojs-ie8.min.js')}}"></script>
<script src="{{asset('assets/front/js/video.js')}}"></script>
<script src="{{asset('assets/front/js/Youtube.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/front/js/main.js')}}"></script>
@auth
@if(!auth()->user()->is_admin)
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/604cda31067c2605c0b8013f/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@endif
@endauth

@guest

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/604cda31067c2605c0b8013f/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

@endguest


