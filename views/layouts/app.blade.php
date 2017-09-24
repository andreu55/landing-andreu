<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Hey')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ 'public/vendor/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ 'public/vendor/font-awesome/css/font-awesome.min.css' }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ 'public/vendor/magnific-popup/magnific-popup.css' }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ 'public/css/creative.css' }}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ 'public/vendor/jquery/jquery.min.js' }}"></script>
    <script src="{{ 'public/vendor/popper/popper.min.js' }}"></script>
    <script src="{{ 'public/vendor/bootstrap/js/bootstrap.min.js' }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ 'public/vendor/jquery-easing/jquery.easing.min.js' }}"></script>
    <script src="{{ 'public/vendor/scrollreveal/scrollreveal.min.js' }}"></script>
    <script src="{{ 'public/vendor/magnific-popup/jquery.magnific-popup.min.js' }}"></script>

    <!-- Custom scripts for this template -->
    @yield('scripts')

  </body>

</html>
