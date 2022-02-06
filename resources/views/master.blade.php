<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Dashboard')</title>
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="icon" href="{{asset('images/logos/fav.png')}}">
    @yield('head')
</head>
<body>

@yield('content')

<script src="{{asset('js/theme.js')}}"></script>
@stack('script')
</body>
</html>
