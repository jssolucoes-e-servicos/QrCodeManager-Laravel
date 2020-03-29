<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de vendas de QrCodes">
    <meta name="author" content="JS Soluções e Serviços">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <title>JS QrCodes</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/templatemo-softy-pinko.css')}}">


    <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/magnific-popup.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/themify-icons.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/nice-select.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/flaticon.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/gijgo.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/animate.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/slicknav.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css')}} ">

    <script src="//code.jivosite.com/widget/xvUTyIxSNl" async></script>

    @yield('content-css')
  </head>
  <body>
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    @include('templates.web.header')
    @yield('content-view')
    @include('templates.web.footer')
    @yield('content-js')

    <script src="{{ asset('assets/web/js/jquery-2.1.0.min.js')}}"></script>
    <script src="{{ asset('assets/web/js/popper.js')}}"></script>
    <script src="{{ asset('assets/web/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/web/js/scrollreveal.min.js')}}"></script>
    <script src="{{ asset('assets/web/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/web/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('assets/web/js/imgfix.min.js')}}"></script>
    <script src="{{ asset('assets/web/js/custom.js')}}"></script>



    <!-- JS here -->
    <script src="{{ asset('assets/web/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/web/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/scrollIt.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/web/js/gijgo.min.js') }}"></script>
    <!--contact js-->
    <script src="{{ asset('assets/web/js/contact.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/mail-script.js') }}"></script>
  </body>
</html>
