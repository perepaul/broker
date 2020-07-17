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
@if(!auth()->user()->is_admin)
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'a5989a7c-e652-416f-ac79-94c731dc705c', f: true }); done = true; } }; })();</script>
@endif
