<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
@yield('css')
@yield('headerjs')
</head>
<body class="is-preload">

@include('home._header')
@include('home._menu')

@section('content')
Content
@show

@include('home._footer')
@yield('footerjs')
</body>
</html>


















