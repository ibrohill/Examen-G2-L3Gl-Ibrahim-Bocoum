<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gestion des Location et Covoiturage  &mdash; @yield('titre')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('ib/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ib/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ib/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ib/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ib/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ib/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ib/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ib/css/slicknav.min.css') }}" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('ib/css/style.css') }}" type="text/css">


    
  </head>
  <body>
    
    {{-- <div class="p-6 text-gray-900">
      <p>{{ __('Welcome') }}, {{ $name }}</p>
      <p>{{ __('Email') }}: {{ $email }}</p>
  </div> --}}

    @include('layouts._navbar')

    
    		

    @yield('content')          
             
    
  
    @include('layouts._footer')
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
{{-- <script src="{{ asset('ib/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('ib/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('ib/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('ib/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('ib/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('ib/js/mixitup.min.js') }}"></script>
<script src="{{ asset('ib/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('ib/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('ib/js/main.js') }}"></script> --}}

    
  </body>
</html>