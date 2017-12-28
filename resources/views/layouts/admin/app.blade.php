<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Esmaeel Cheshmehkhavar">
    <meta name="keywords" content="{{ $keywords ?? 'shimi shimi shimi' }}">
    <meta name="description" content="{{ $description ?? 'shimi shimi shimi'}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'شرکت شیمیایی گسترش پرداز ماده') }}</title>

    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin/cover.js') }}"></script>
    <script src="{{ asset('js/admin/tooltip.js') }}"></script>
</head>
<body>
<header>
    @include('layouts.admin.header')
    @include('layouts.admin.navigator')
</header>

@yield('body')

@yield('script')
</body>
</html>