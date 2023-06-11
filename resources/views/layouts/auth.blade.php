<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>@yield('title')</title>
    <link href="{{ asset('template-auth/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template-auth/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template-auth/css/ruang-admin.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
    <!-- Login Content -->
    @yield('content')
    <!-- Login Content -->
    <script src="{{ asset('template-auth/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template-auth/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template-auth/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('template-auth/js/ruang-admin.min.js') }}"></script>
</body>

</html>
