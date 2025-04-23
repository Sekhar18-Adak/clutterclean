<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('css.defaultcss')
    @yield('customcss')
    <title> @yield('title')</title>
  </head>
  <body>
     @yield('main-content')
      @include('js.defaultjs')
      @yield('customjs')
  </body>
</html>