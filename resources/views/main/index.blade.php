<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    @include('components.icon')
    <!-- Google Fonts
		============================================ -->
    @include('components.fonts')
    <!-- CSS --
        ============================================ --> 
    @include('components.css')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    @include('base.header')
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    @include('base.mobile-menu')
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    @include('base.main-menu')
    <!-- Main Menu area End-->

    <!-- CONTENT -->
    @yield('content', 'Page content')
    <!-- END -->

    <!-- Start Footer area-->
    @include('base.footer')
    <!-- End Footer area-->
    <!-- JS
        ============================================ -->
    @include('components.js')
</body>

</html>