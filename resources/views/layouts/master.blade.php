<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--stylesheets for bootstrap included for all pages--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    {{--stripts for jquery and bootstrap included for all pages--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    {{--datatables css and js files for entire app--}}
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    {{--Location for code to load page specific javascript files--}}
    @yield('pagescript')

    {{--custom stylesheet to add my modifications for the entire app to bootstrap--}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>

    <title> @yield('title')</title>
</head>

<body>
@include('partials.navbar')
@yield('content')
</body>
</html>
