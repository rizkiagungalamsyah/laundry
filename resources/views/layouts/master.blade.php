<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('admin-dashboard/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="icon" href="{{ asset('icon.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.14/combined/css/gijgo.min.css" rel="stylesheet"
        type="text/css" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>
        {{ config('app.name') }} | @yield('title')</title>
</head>

<body>

    <!-- SIDEBAR -->
    @include('layouts/sidebar')
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        @include('layouts/navbar')
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <h1 class="title">@yield('title')</h1>
            <ul class="breadcrumbs">
                @section('breadcrumbs')
                    <li><a href="/">Home</a></li>
                    <li class="divider">/</li>
                @show
            </ul>
            </div>
            <!-- MAIN -->
            @yield('content')
            <!-- MAIN -->
        </main>
        <!-- MAIN -->
    </section>
    <!-- NAVBAR -->

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('admin-dashboard/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.14/combined/js/gijgo.min.js" type="text/javascript">
    </script>
    @yield('script')
</body>

</html>
