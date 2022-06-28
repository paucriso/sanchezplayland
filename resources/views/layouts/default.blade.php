<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <title>@yield('title')</title>
  @yield('revheader')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @livewireStyles
  <meta name="theme-color" content="#39a935" >
</head>
<body>
  @include('partials.header')
  @yield('content')
  @include('partials.footer')
  @livewireScripts  
</body>
</html>