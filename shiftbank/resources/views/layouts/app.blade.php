<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shift System')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Solo si usas Vite -->
    @livewireStyles
</head>
<body>
    <!-- Barra de Navegación -->
    <nav class="navbar">
        <a href="{{ route('register') }}" class="nav-link">Register</a>
        <a href="{{ route('shifts') }}" class="nav-link">View Shifts</a>
        <a href="{{ route('manage') }}" class="nav-link">Manage</a>
    </nav>

    <!-- Contenido Principal -->
    <div class="main-container">
        @yield('content')
    </div>

    @livewireScripts
</body>
</html>

<style>
    /* Estilos generales */
    body {
        font-family: sans-serif;
        background-color: #f5f5f5; /* Gris claro para el fondo */
        color: #212121; /* Negro para el texto */
        margin: 0;
        padding: 0;
    }

    /* Barra de Navegación */
    .navbar {
        background-color: #2196F3; /* Azul claro */
        padding: 1rem;
        display: flex;
        justify-content: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav-link {
        color: #ffffff; /* Blanco para el texto */
        text-decoration: none;
        padding: 0.5rem 1rem;
        margin: 0 0.5rem;
        transition: background-color 0.2s, transform 0.2s;
        border-radius: 0.25rem;
    }

    .nav-link:hover {
        background-color: #1976D2; /* Azul más oscuro al pasar el mouse */
        transform: translateY(-2px);
    }

    /* Contenedor Principal */
    .main-container {
        max-width: 1200px;
        margin: 1.5rem auto;
        padding: 1rem;
        background-color: #ffffff; /* Blanco para el fondo del contenido */
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
