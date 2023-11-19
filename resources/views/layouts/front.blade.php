<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    {{-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> --}}
  <!-- Font Awesome Icons -->
  
  <!-- CSS Files -->
  
  <!-- Styles -->
   
  <link href="{{ asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet">
  
  
  <link href="{{ asset('frontend/css/custom.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/css/bootstrap5.css')}}" rel="stylesheet">

    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
{{-- google font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
{{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   {{-- font awsome --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
<style>
  a{
    text-decoration: none !important;
  }
</style>
 
</head>
<body >
    @include('layouts.inc.frontnavbar')
    <div class="content">
      @yield('content')
     
    </div>
    
    <script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    
   
   
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
  <script>
    swal("{{session('status')}}");
  </script>

    
@endif
   @yield('scripts')
</body>
</html>
