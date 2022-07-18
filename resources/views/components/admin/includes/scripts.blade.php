<!-- BEGIN VENDOR JS-->
<script src="{{ asset('assets/admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('assets/admin/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('assets/admin/data/jvector/visitor-data.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{ asset('assets/admin/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/core/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/scripts/customizer.js') }}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('assets/admin/js/scripts/pages/dashboard-sales.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

@stack('js')
