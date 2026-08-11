<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Utility Routes
Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return response()->json([
        'status' => 'success',
        'message' => 'Application cache cleared successfully via optimize:clear.',
        'output' => trim(Artisan::output()),
    ]);
})->name('optimize.clear');

// Main Home Page
Volt::route('/', 'home.index')->name('home');
