<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.js') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <title>@yield('titre','Cours en ligne')</title>
</head>

<body>
    <div class="sidebar">
        @yield('side-bar')
    </div>

    @yield('content')

    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/apps.js') }}"></script>
</body>

</html>