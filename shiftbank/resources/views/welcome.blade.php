<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Livewire</title>

    <!-- Añadir los estilos de Livewire -->
    @livewireStyles
</head>
<body>

    <h1>Bienvenido a Laravel con Livewire</h1>

    @livewire('create-shift-component')
    @livewire('shift-list-component')


    @livewireScripts
</body>
</html>
