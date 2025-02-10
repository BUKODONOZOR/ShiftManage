
<div class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-xl font-semibold mb-4">Solicitar Turno</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="generateShift">
        <div class="mb-4">
            <label class="block text-gray-700">Nombre</label>
            <input type="text" wire:model="name" class="w-full border rounded p-2">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Documento</label>
            <input type="text" wire:model="document" class="w-full border rounded p-2">
            @error('document') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Problema</label>
            <textarea wire:model="problem" class="w-full border rounded p-2"></textarea>
            @error('problem') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Obtener Turno</button>
    </form>
</div>
