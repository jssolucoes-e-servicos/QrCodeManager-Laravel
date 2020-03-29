<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href=" {{ asset('assets/app/css/adminlte.css')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/app/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/app/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/app/css/adminlte.min.css') }}">
    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('assets/app/css/style.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css-view')
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('templates.app.navbar')
        @include('templates.app.asside-left')
        @yield('content-view')
        @include('templates.app.footer')
        <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        </aside>
    </div>

    @yield('js-view')
    <!-- jQuery -->
    <script src=" {{ asset('assets/app/plugins/jquery/jquery.min.js')}} "></script>
    <!-- Bootstrap 4 -->
    <script src=" {{ asset('assets/app/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
    <!-- AdminLTE App -->
    <script src=" {{ asset('assets/app/js/adminlte.min.js')}} "></script>
    <!-- AdminLTE for demo purposes -->
    <script src=" {{ asset('assets/app/js/demo.js')}} "></script>
</body>
</html>
