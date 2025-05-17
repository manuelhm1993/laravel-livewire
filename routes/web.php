<?php

use App\Livewire\CreatePost;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Componente de página completa, permite que el componente actúe como un controlador y toda la vista sea reactiva
    Route::get('/dashboard', CreatePost::class)->name('dashboard');
});
