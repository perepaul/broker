<script src="/assets/front/js/vendors/uikit.min.js"></script>
<script src="/assets/front/js/vendors/blockit.min.js"></script>
<script src="/assets/front/js/config-theme.js"></script>
@auth
@if(!auth()->user()->is_admin)
<script src="//code.tidio.co/lrrw7x4ngtinaq7rspwnii0bdw0dggvr.js" async></script> async></script>
@endif
@endauth

@guest

<script src="//code.tidio.co/lrrw7x4ngtinaq7rspwnii0bdw0dggvr.js" async></script> async></script>
@endguest


