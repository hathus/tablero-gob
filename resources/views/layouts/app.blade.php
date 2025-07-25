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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @notifyCss

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <wireui:scripts /> --}}
</head>

<body class="font-sans antialiased">
    <div class="z-50 fixed top-0 left-0 right-0 bg-white dark:bg-gray-900 shadow">
        <x-notify::notify />
    </div>
    <div class="bg-gray-50">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow sticky top-[65px] z-10">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @notifyJs
    @stack('scripts')
    <!-- SVG decorativo inferior con fondo gray-50 -->
    <div class="bg-gray-50">
<svg class="block w-full h-[100px] rotate-180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
    viewBox="0 0 1200 120">
    <defs>
        <linearGradient id="grad-rosa-morado" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#46006E" />
            <stop offset="100%" stop-color="#B00049" />
        </linearGradient>
    </defs>

    <!-- Path simétrico con ondas repetidas -->
    <path d="
        M0,60
        C75,20 225,100 300,60
        C375,20 525,100 600,60
        C675,20 825,100 900,60
        C975,20 1125,100 1200,60
        L1200,0 L0,0 Z"
        fill="url(#grad-rosa-morado)" opacity="0.8" />

    <!-- Borde -->
    <path d="
        M0,60
        C75,20 225,100 300,60
        C375,20 525,100 600,60
        C675,20 825,100 900,60
        C975,20 1125,100 1200,60"
        fill="none" stroke="#D0B787" stroke-width="5" />
</svg>


</body>

</html>
