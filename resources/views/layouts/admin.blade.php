<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="icon" type="image/icon" href="{{ asset('assets/img/favicon.ico') }}"> -->
    <title>
        @hasSection('page_title')
            @yield('page_title') |
        @endif {{ __('Admin Dashboard') }}
    </title>
    <link href="{{ asset('css/styles.css?v1') }}" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
         <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">  
</head>

<body>

    @auth
        @yield('auth')
    @endauth
    @guest
        @yield('guest')
    @endguest
   

   <!-- jQuery -->
   <script src="{{ asset('js/jquery.min.js') }}"></script>
   <!-- Bootstrap Bundle Js -->
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('/Chart.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('js/pages/dashboard3.js') }}"></script>
    @yield('script')
</body>

</html>
