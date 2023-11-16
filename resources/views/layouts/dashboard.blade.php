<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
    <x-dashboard.head />
</head>
<body class="vertical  dark  ">
    <div class="wrapper">
  
      <x-dashboard.header />
  
      <x-dashboard.aside />
      
      @yield('content')
      
      <x-dashboard.modals />

    </div> <!-- .wrapper -->
  
    <x-dashboard.foot />
    @stack('js')
  
  </body>
  
  </html>
