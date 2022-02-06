<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Dashboard')</title>
    <link rel="icon" href="{{asset('images/logos/fav.png')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('head')
</head>
<body class="bg-body">

<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-12 col-lg-10">
            <div class="content">
                @include('layouts.header')

            </div>
        </div>
    </div>
</div>

<script src="{{asset('jss/app.js')}}"></script>
@stack('script')
</body>
</html>



