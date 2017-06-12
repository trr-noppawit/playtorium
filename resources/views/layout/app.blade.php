<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('include.nav')

    @yield('content')
  </body>
</html>
