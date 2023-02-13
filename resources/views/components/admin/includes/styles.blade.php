<link rel="apple-touch-icon" href="{{ asset('assets/admin/images/ico/apple-icon-120.png') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/site/img/personal/logo.svg') }}">
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
    rel="stylesheet">
<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
<!-- BEGIN VENDOR CSS-->
@php
    $dir = 'css';
    if (@getLocaleAttr()['dir'] == 'rtl') {
        $dir .= '-rtl';
    }
@endphp
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/$dir/vendors.css") }}">
<!-- END VENDOR CSS-->
<!-- BEGIN MODERN CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/$dir/app.css") }}">
<!-- END MODERN CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset("assets/admin/$dir/core/menu/menu-types/vertical-menu-modern.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/$dir/core/colors/palette-gradient.css") }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/charts/morris.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/fonts/simple-line-icons/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/$dir/core/colors/palette-gradient.css") }}">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/$dir/style.css") }}">
<!-- END Custom CSS-->

@stack('styles')
