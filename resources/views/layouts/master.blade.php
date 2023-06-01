<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('admin-dashboard/style.css') }}">
    <link rel="icon" href="{{ asset('icon.png') }}">
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
</body>

</html>
