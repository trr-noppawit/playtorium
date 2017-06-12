<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
  </head>
  <body>
    @include('include.nav')

    @yield('content')
  </body>
</html>
