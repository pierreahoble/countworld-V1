<!doctype html>
<html class="no-js" lang="fr">
    
<!-- Mirrored from www.devsnews.com/template/netfix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 17:24:24 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DOC APPS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/jquery.flipster.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/responsive.css') }}">
        @yield('style')
    </head>
    <body>

        <!-- Preloader -->
        <div id="preloader">
            <img src="{{ asset('asset/img/preloader.gif') }}" alt="">
        </div>
        <!-- Preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
      @include('menu.menu')
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

         @yield('contenu')

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
      @include('menu.footer')
        <!-- footer-area-end -->


       

		<!-- JS here -->
        <script src="{{ asset('asset/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.flipster.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('asset/js/jarallax.min.js') }}"></script>
        <script src="{{ asset('asset/js/slick.min.js') }}"></script>
        <script src="{{ asset('asset/js/wow.min.js') }}"></script>
        <script src="{{ asset('asset/js/main.js') }}"></script>

        @yield('script')

    </body>

<!-- Mirrored from www.devsnews.com/template/netfix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 17:25:30 GMT -->
</html>
