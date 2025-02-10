<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shift System')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Solo si usas Vite -->
    @livewireStyles
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-500 text-white p-4">
        <a href="{{ route('register') }}" class="px-4">Register</a>
        <a href="{{ route('shifts') }}" class="px-4">View Shifts</a>
        <a href="{{ route('manage') }}" class="px-4">Manage</a>
    </nav>

    <div class="container mx-auto mt-6">
        @yield('content')
    </div>

    @livewireScripts
</body>
</html>
