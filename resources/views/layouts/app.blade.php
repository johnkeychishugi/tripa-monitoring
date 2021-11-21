<!DOCTYPE html>
<html lang="en">

<head>
    <title>FEDGEN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .nav-title {
            color: #fff;
            padding: 10px 10px 10px 12px;
            font-size: 20px;
        }

        .brand-text {
            color: #fff !important;
            padding: 20px 10px 10px 12px !important;
        }
    </style>
    @yield('css')
</head>

<body>
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        @include('layouts.partials.header')
        @yield('content')
    </div>
</body>

</html>