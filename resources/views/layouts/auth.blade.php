<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="app.css">
  @vite('resources/css/app.css')
  <title>Halaman, {{ $title }}</title>
</head>
<body>
    <div class="">
        @yield('mainContainer')
    </div>
    
    <script src="{{ asset('js/myscript.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>