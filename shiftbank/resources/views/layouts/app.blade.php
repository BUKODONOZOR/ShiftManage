<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shift System')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Solo si usas Vite -->
    @livewireStyles
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
