<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateShiftComponent;
use App\Http\Livewire\ShiftListComponent;
use App\Http\Livewire\PublicShiftListComponent;

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/manage', function () {
    return view('manage');
})->name('manage');  

Route::get('/shifts', function () {
    return view('shifts');
})->name('shifts');
