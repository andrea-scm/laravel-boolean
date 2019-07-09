<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Boolean @yield('title')</title>
  </head>
  <body>
    @include('layouts._header')

    <div id = "main_content">
      @yield('content')
    </div>

    @include('layouts._footer')
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
  </body>
</html>
