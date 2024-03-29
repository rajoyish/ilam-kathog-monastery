<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEOMeta::generate() !!}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-kathog-namnang.png') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-xl bg-amber-100 min-h-screen">
    {{-- SITE HEADER --}}
    @include('layouts.site-header')

    {{-- NAVIGATION --}}
    @include('layouts.guest-nav')

    <main>
        {{ $slot }}
    </main>
</body>

</html>
