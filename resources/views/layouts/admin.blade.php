<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    {{-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> --}}
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('admin/css/material-dashboard.css')}}" rel="stylesheet">
    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    
    <!-- Styles -->
   
    <link href="{{ asset('frontend/css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css')}}" rel="stylesheet">

 
</head>
<body class="g-sidenav-show  bg-gray-200">
  @include('layouts.inc.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.inc.adminnav')
    <div class="container-fluid py-4">
      @yield('content')
      @include('layouts.inc.adminfooter')
    </div>
    
  </main>
    
    <script src="{{asset('admin/js/popper.min.js')}}" defer></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('admin/js/perfect-scrollbar.min.js')}}" defer></script>
    <script src="{{asset('admin/js/smooth-scrollbar.min.js')}}" defer></script>
    <script src="{{asset('admin/js/chartjs.min.js')}}" defer></script>
    <script src="{{asset('admin/js/material-dashboard.min.js')}}" defer></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
  <script>
    swal("{{session('status')}}");
  </script>

    
@endif
   @yield('scripts')
</body>
</html>
