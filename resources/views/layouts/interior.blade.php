<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  @yield('revheader')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @livewireStyles
</head>
<body>
  @include('partials.header2')
  @yield('content')
  @include('partials.footer')
  @livewireScripts  
</body>
</html>