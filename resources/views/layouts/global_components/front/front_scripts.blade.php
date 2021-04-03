<script src="/assets/front/js/vendors/uikit.min.js"></script>
<script src="/assets/front/js/vendors/blockit.min.js"></script>
<script src="/assets/front/js/config-theme.js"></script>
@auth
@if(!auth()->user()->is_admin)
<script src="//code.tidio.co/2czgg3otcebvjlw4u1bwh518eozkl5n4.js" async></script>
@endif
@endauth

@guest

<script src="//code.tidio.co/2czgg3otcebvjlw4u1bwh518eozkl5n4.js" async></script>
@endguest


