@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Shifts</h1>
        @livewire('public-shift-list-component')
    </div>
@endsection
