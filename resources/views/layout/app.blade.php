<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{!! asset('css/bootstrap-datepicker.css') !!}">
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
  </head>
  <body>
    @include('include.nav')

    @yield('content')
  </body>
</html>
