<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\NoteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::view('/', 'index');

Route::get('dashboard', [PageController::class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

// To Generate all the routes
Route::resource('notes', NoteController::class)
    ->middleware('auth:sanctum');