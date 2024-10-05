<!DOCTYPE html>
<html>

<head>
  <title>@hasSection('page_title')@yield('page_title') @endif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Rama SHG">
  <!-- Favicon and Touch Icons -->
  <link href="{{ asset('front/images/favicon.png') }}" rel="shortcut icon" type="image/png">
  <link href="{{ asset('front/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="{{ asset('front/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
  <link href="{{ asset('front/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
  <link href="{{ asset('front/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

  <!-- Stylesheet -->
  <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('front/css/animate.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('front/css/javascript-plugins-bundle.css') }}" rel="stylesheet" />
  <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" />

  <!-- CSS | menuzord megamenu skins -->
  <link href="{{ asset('front/js/menuzord/css/menuzord.css') }}" rel="stylesheet" />

  <!-- CSS | Main style file -->
  <link href="{{ asset('front/css/style-main.css') }}" rel="stylesheet" type="text/css">
  <link id="menuzord-menu-skins" href="{{ asset('front/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet" />

  <!-- CSS | Responsive media queries -->
  <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet" type="text/css">
  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

  <!-- CSS | Theme Color -->
  <link href="{{ asset('front/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <link rel="stylesheet" href="{{ asset('front/css/style-gallery.css') }}">
  <!-- external javascripts -->
  <script src="{{ asset('front/js/jquery.js') }}"></script>
  <script src="{{ asset('front/js/popper.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/js/javascript-plugins-bundle.js') }}"></script>
  <script src="{{ asset('front/js/menuzord/js/menuzord.js') }}"></script>

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('front/js/revolution-slider/css/rs6.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front/js/revolution-slider/extra-rev-slider1.css') }}">


  <!-- REVOLUTION LAYERS STYLES -->
  <!-- REVOLUTION JS FILES -->
  <script src="{{ asset('front/js/revolution-slider/js/revolution.tools.min.js') }}"></script>
  <script src="{{ asset('front/js/revolution-slider/js/rs6.min.js') }}"></script>
  <script src="{{ asset('front/js/revolution-slider/extra-rev-slider1.js') }}"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165690206-1"></script>
  @yield('front-header')
</head>

<body class="has-side-panel side-panel-right">

  @yield('guest')

  <!-- <script src="{{asset('front/js/jquery.js')}}" type="text/javascript"></script>
  <script src="{{asset('front/js/bootstrap.min.js')}}" type="text/javascript"></script> -->
  <!-- JS | Custom script for all pages -->
  <script src="{{ asset('front/js/custom.js') }}"></script>
  <script src="{{ asset('front/js/main.js') }}"></script>
  @yield('front-footer')
</body>

</html>