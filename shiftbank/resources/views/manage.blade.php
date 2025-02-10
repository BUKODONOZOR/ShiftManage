@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6 bg-white">
        <h1 class="text-2xl font-bold mb-4 text-black">Manage Shifts</h1>
        @livewire('shift-list-component')
    </div>
@endsection
