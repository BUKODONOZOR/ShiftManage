<div class="container">
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg">
            {{ session('message') }}
        </div>
    @endif

    @if ($step == 1)
        <div class="step-container animate-slide-in">
            <label class="labelInput">INGRESE SU NOMBRE COMPLETO:</label>
            <input type="text" wire:model="name" class="input">
            <button wire:click="nextStep" class="button">Siguiente</button>
        </div>
    @elseif ($step == 2)
        <div class="step-container animate-slide-in">
            <label class="labelInput">INGRESE SU DOCUMENTO:</label>
            <input type="text" wire:model="document" class="input">
            <div class="button-group">
                <button wire:click="prevStep" class="button secondary">Atrás</button>
                <button wire:click="nextStep" class="button">Siguiente</button>
            </div>
        </div>
    @elseif ($step == 3)
        <div class="step-container animate-slide-in">
            <label class="labelInput">INGRESE EL TRAMITE QUE VA A REALIZAR:</label>
            <textarea wire:model="problem" class="input"></textarea>
            <div class="button-group">
                <button wire:click="prevStep" class="button secondary">Atrás</button>
                <button wire:click="nextStep" class="button">Siguiente</button>
            </div>
        </div>
    @elseif ($step == 4)
        <div class="step-container animate-slide-in">
            <h2 class="text-2xl font-bold mb-4">Confirma la información</h2>
            <p class="mb-2"><strong>Nombre:</strong> {{ $name }}</p>
            <p class="mb-2"><strong>Documento:</strong> {{ $document }}</p>
            <p class="mb-4"><strong>Problema:</strong> {{ $problem }}</p>
            <div class="button-group">
                <button wire:click="prevStep" class="button secondary">Atrás</button>
                <button wire:click="generateShift" class="button">Confirmar</button>
            </div>
        </div>
    @endif

    <!-- Alert para mostrar el paso actual -->
    <div class="step-alert">
        Paso {{ $step }} de 4
    </div>
</div>

<style>
    /* Fuente estilizada */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
    }

    .container {
        margin: auto;
        width: 100%;
        max-width: 600px;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #F5F5F5;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .step-container {
        width: 100%;
        max-width: 500px;
        text-align: center;
    }

    .labelInput {
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 30px; /* Más separación entre el label y el input */
    }

    .input {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
        border: 2px solid #ddd;
        border-radius: 8px;
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .input:focus {
        border-color: #F44336;
        outline: none;
    }

    .button {
        background-color: #F44336;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #D32F2F;
    }

    .button.secondary {
        background-color: #6c757d;
    }

    .button.secondary:hover {
        background-color: #5a6268;
    }

    .button-group {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    /* Animación de desplazamiento */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-slide-in {
        animation: slideIn 0.5s ease-out;
    }

    /* Alert del paso actual */
    .step-alert {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #F44336;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 0.9rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
        .labelInput {
            font-size: 1.2rem;
        }

        .input {
            font-size: 0.9rem;
        }

        .button {
            padding: 10px 20px;
            font-size: 0.9rem;
        }

        .step-alert {
            font-size: 0.8rem;
            padding: 8px 16px;
        }
    }
</style>