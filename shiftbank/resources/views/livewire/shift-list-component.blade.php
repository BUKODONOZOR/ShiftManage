<div>
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">
            <!-- Logo de Claro -->
            <img src="{{ asset('images/claro-logo.png') }}" alt="Claro Logo" class="h-10">
            <!-- Menú de Navegación -->
            <nav class="space-x-4">
                <a href="#" class="text-blue-500 hover:text-blue-600">Inicio</a>
                <a href="#" class="text-blue-500 hover:text-blue-600">Turnos</a>
                <a href="#" class="text-blue-500 hover:text-blue-600">Contacto</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal -->
    <div class="bg-cover bg-center" style="background-image: url('{{ asset('images/wave-pattern.png') }}');">
        <div class="container mx-auto p-4 sm:p-6 bg-white bg-opacity-90 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4 text-black">Gestión de Turnos</h2>

            <!-- Turnos Pendientes -->
            <div class="mb-6 bg-gray-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-2 text-black">Turnos Pendientes</h3>
                <ul class="space-y-2">
                    @foreach ($pendingShifts as $shift)
                        <li class="p-3 border rounded flex flex-col sm:flex-row justify-between items-center bg-white hover:shadow-lg transition-shadow">
                            <span class="text-black text-center sm:text-left mb-2 sm:mb-0">{{ $shift->number }} - {{ $shift->name }} ({{ $shift->document }})</span>
                            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition-colors flex items-center"
                                wire:click="updateState({{ $shift->id }}, 'progress')">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                </svg>
                                Iniciar
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Turnos en Progreso -->
            <div class="mb-6 bg-gray-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-2 text-black">Turnos en Progreso</h3>
                <ul class="space-y-2">
                    @foreach ($inProgressShifts as $shift)
                        <li class="p-3 border rounded flex flex-col sm:flex-row justify-between items-center bg-white hover:shadow-lg transition-shadow">
                            <span class="text-black text-center sm:text-left mb-2 sm:mb-0">{{ $shift->number }} - {{ $shift->name }} (Box {{ $shift->box }})</span>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors flex items-center"
                                wire:click="updateState({{ $shift->id }}, 'checket')">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Completar
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Turnos Completados -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-2 text-black">Turnos Completados</h3>
                <ul class="space-y-2">
                    @foreach ($checkedShifts as $shift)
                        <li class="p-3 border rounded flex flex-col sm:flex-row justify-between items-center bg-white hover:shadow-lg transition-shadow">
                            <span class="text-black text-center sm:text-left mb-2 sm:mb-0">{{ $shift->number }} - {{ $shift->name }}</span>
                            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition-colors flex items-center"
                                wire:click="deleteShift({{ $shift->id }})">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                                Eliminar
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-100 py-6 mt-8">
        <div class="container mx-auto px-4 sm:px-6 text-center">
            <p class="text-black">© 2025 Claro Colombia. Todos los derechos reservados.</p>
            <p class="text-black">Contacto: <a href="mailto:soporte@claro.com.co" class="text-blue-500 hover:text-blue-600">soporte@claro.com.co</a></p>
            <div class="mt-4 space-x-4">
                <a href="#" class="text-blue-500 hover:text-blue-600">Términos y Condiciones</a>
                <a href="#" class="text-blue-500 hover:text-blue-600">Política de Privacidad</a>
            </div>
        </div>
    </footer>
</div>
