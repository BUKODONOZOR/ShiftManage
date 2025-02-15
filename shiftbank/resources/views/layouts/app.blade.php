<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shift System')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Solo si usas Vite -->
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

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
</style>
