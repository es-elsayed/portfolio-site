@props(['title' => '', 'breadcrumbTitle', 'header' => ''])

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="Islam3bdu">
    <title>{{ config('app.name', 'Laravel') }} {{ $title != '' ? "| $title" : '' }}</title>


    <x-admin.includes.styles />
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- fixed-top-->
    <x-admin.includes.header.main />
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <x-admin.includes.sidebar />

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <!--begin::Actions-->
                @if ($breadcrumbTitle ?? 0)
                    <x-admin.includes.header.sub :title='$breadcrumbTitle'>
                        <x-slot name="header">{{ $header }}</x-slot>
                    </x-admin.includes.header.sub>
                @endif
                <!--end::Actions-->
            </div>
            <div class="content-body" id="app">

                {{-- Content --}}
                {{ $slot }}
            </div>
        </div>
    </div>

    {{-- ************************ Footer Section ************************ --}}
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2022
                <a class="text-bold-800 grey darken-2" href="https://islamabdelkader.com" target="_blank">Islam3bdu
                </a>, All rights reserved. </span>
            <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with
                <i class="ft-heart pink"></i>
            </span>
        </p>
    </footer>
    <x-admin.includes.scripts />
@stack('scripts')

</body>

</html>
