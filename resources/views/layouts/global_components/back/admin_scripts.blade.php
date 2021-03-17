<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="{{asset('js/custom-admin.js')}}"></script>
<script src="{{asset('assets/back/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('assets/back/app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/back/app-assets/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>
<script src=".{{asset('assets/back/app-assets/vendors/js/tables/jquery.dataTables.min.js')}}" type="text/javascript">
</script>
<script src=".{{asset('assets/back/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"
    type="text/javascript"></script>
<script src=".{{asset('assets/back/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"
    type="text/javascript"></script>
<script src=".{{asset('assets/back/app-assets/vendors/js/tables/datatable/dataTables.rowReorder.min.js')}}"
    type="text/javascript"></script>
<script src=".{{asset('assets/back/app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript">
</script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('assets/back/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/back/app-assets/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/back/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/back/app-assets/js/scripts/pages/users-contacts.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('assets/back/app-assets/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>
@auth
@if(!auth()->user()->is_admin)
<script src="//code.tidio.co/yy9rwgzzpoqdmrz7odi6vqrxtn71gsvs.js" async></script>
@endif
@endauth
