@extends('layouts.app')

@section('content')
    <div class="manage-container">
        <h1 class="manage-title">Manage Shifts</h1>
        @livewire('shift-list-component')
    </div>
@endsection

<style>
    /* Estilos generales */
    body {
        font-family: sans-serif;
        background-color: #ffffff;
        color: #212121;
        margin: 0;
        padding: 0;
    }

    /* Contenedor Principal */
    .manage-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 1.5rem;
        background-color: #ffffff;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .manage-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color: #212121;
    }
</style>
