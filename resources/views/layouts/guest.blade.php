<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="{{asset('backend/')}}./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
        <script src="    {{asset('backend/vendor/global/global.min.js')}}
        "></script>
            <script src="    {{asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}
        "></script>
            <script src="    {{asset('backend/vendor/chart.js/Chart.bundle.min.js')}}
        "></script>

            <!-- Chart piety plugin files -->
            <script src="    {{asset('backend/vendor/peity/jquery.peity.min.js')}}
        "></script>

            <!-- Apex Chart -->
            <script src="    {{asset('backend/vendor/apexchart/apexchart.js')}}
        "></script>

            <!-- Dashboard 1 -->
            <script src="    {{asset('backend/js/dashboard/dashboard-1.js')}}
        "></script>

            <script src="    {{asset('backend/vendor/owl-carousel/owl.carousel.js')}}
        "></script>
            <script src="    {{asset('backend/js/custom.min.js')}}
        "></script>
            <script src="    {{asset('backend/js/deznav-init.js')}}
        "></script>
    </body>
</html>
