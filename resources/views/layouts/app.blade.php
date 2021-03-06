<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>پنل مدیریت - @yield('title','')</title>
    <link rel="apple-touch-icon" href="{{asset('back/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('back/app-assets/images/ico/favicon.ico')}}">
    <link href="{{asset('back/app-assets/images/fonts.googleapis.css')}}" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/bootstrap-extended.min.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="row flexbox-container">
              @yield('content')
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('back/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('back/app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{asset('back/app-assets/js/core/app.min.js')}}"></script>
<script src="{{asset('back/app-assets/js/scripts/components.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>
