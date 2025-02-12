<div>
    <!-- Contenido Principal -->
    <div class="main-content">
        <div class="content-container">
            <h2 class="title">Gestión de Turnos</h2>

            <!-- Turnos Pendientes -->
            <div class="section">
                <h3 class="section-title">Turnos Pendientes</h3>
                <ul class="shift-list">
                    @foreach ($pendingShifts as $shift)
                        <li class="shift-item">
                            <span class="shift-info">{{ $shift->number }} - {{ $shift->name }} ({{ $shift->document }})</span>
                            <button class="btn-start" wire:click="updateState({{ $shift->id }}, 'progress')">
                                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                </svg>
                                Iniciar
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Turnos en Progreso -->
            <div class="section">
                <h3 class="section-title">Turnos en Progreso</h3>
                <ul class="shift-list">
                    @foreach ($inProgressShifts as $shift)
                        <li class="shift-item">
                            <span class="shift-info">{{ $shift->number }} - {{ $shift->name }} (Box {{ $shift->box }})</span>
                            <button class="btn-complete" wire:click="updateState({{ $shift->id }}, 'checket')">
                                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Completar
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Turnos Completados -->
            <div class="section">
                <h3 class="section-title">Turnos Completados</h3>
                <ul class="shift-list">
                    @foreach ($checkedShifts as $shift)
                        <li class="shift-item">
                            <span class="shift-info">{{ $shift->number }} - {{ $shift->name }}</span>
                            <button class="btn-delete" wire:click="deleteShift({{ $shift->id }})">
                                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
</div>

<style>
    /* Estilos generales */
    body {
        font-family: sans-serif;
        background-color: #ffffff;
        color: #212121;
        margin: 0;
        padding: 0;
    }

    /* Contenido Principal */
    .main-content {
        background-image: url('{{ asset('images/wave-pattern.png') }}');
        background-size: cover;
        background-position: center;
        padding: 2rem 0;
    }

    .content-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 1rem;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color: #212121;
    }

    /* Secciones */
    .section {
        margin-bottom: 1.5rem;
        background-color: #f5f5f5;
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .section:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .section-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #212121;
    }

    /* Lista de Turnos */
    .shift-list {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .shift-item {
        padding: 0.75rem;
        border: 1px solid #e5e5e5;
        border-radius: 0.375rem;
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        transition: box-shadow 0.2s, transform 0.2s;
    }

    .shift-item:hover {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    .shift-info {
        text-align: center;
        margin-bottom: 0.5rem;
        color: #212121;
    }

    /* Botones */
    button {
        display: flex;
        align-items: center;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        color: #ffffff;
        transition: background-color 0.2s, transform 0.2s;
        border: none;
        cursor: pointer;
    }

    .btn-start {
        background-color: #F44336;
    }

    .btn-start:hover {
        background-color: #D32F2F;
        transform: translateY(-2px);
    }

    .btn-complete {
        background-color: #2196F3;
    }

    .btn-complete:hover {
        background-color: #1976D2;
        transform: translateY(-2px);
    }

    .btn-delete {
        background-color: #F44336;
    }

    .btn-delete:hover {
        background-color: #D32F2F;
        transform: translateY(-2px);
    }

    button svg {
        width: 1.25rem;
        height: 1.25rem;
        margin-right: 0.5rem;
        transition: transform 0.2s;
    }

    button:hover svg {
        transform: scale(1.1);
    }
</style>
