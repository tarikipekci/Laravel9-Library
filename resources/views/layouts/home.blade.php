<!DOCTYPE HTML>
<html>
<head>
    <title>PHPJabbers.com | Free Book Online Store Website Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css" />
    <noscript><link rel="stylesheet" href="{{asset('assets')}}/css/noscript.css" /></noscript>
@yield('css')
    @yield('headerjs')
</head>

<body class="is-preload">

@include('home._header')

@section('content')
    Contain
@show
@include('home._menu')

@include('home._footer')
@yield('footerjs')
</body>
</html>

























