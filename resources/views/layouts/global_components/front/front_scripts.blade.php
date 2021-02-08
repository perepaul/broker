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
<!-- Start of LiveChat (www.livechatinc.com) code --> <script type="text/javascript">   window.__lc = window.__lc || {};   window.__lc.license = 12606435;   ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)};   var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){   i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},   get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");   return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){   var n=t.createElement("script");   n.async=!0,n.type="text/javascript",   n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};   !n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice)) </script> <noscript> <a href="https://www.livechatinc.com/chat-with/12606435/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a> </noscript> <!-- End of LiveChat code -->
@endif
@endauth

@guest
<!-- Start of LiveChat (www.livechatinc.com) code --> <script type="text/javascript">   window.__lc = window.__lc || {};   window.__lc.license = 12606435;   ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)};   var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){   i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},   get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");   return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){   var n=t.createElement("script");   n.async=!0,n.type="text/javascript",   n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};   !n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice)) </script> <noscript> <a href="https://www.livechatinc.com/chat-with/12606435/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a> </noscript> <!-- End of LiveChat code -->
@endguest


