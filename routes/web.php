<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

// Page's routes

Route::get(
    '/',
    [RouteController::class, 'index']
)->name('index');

Route::get(
    '/cursos',
    [RouteController::class, 'courses']
)->name('courses');

Route::get(
    '/departamentos',
    [RouteController::class, 'departments']
)->name('departments');

Route::get(
    '/contato',
    [RouteController::class, 'contact']
)->name('contact');

// Redirects

Route::get('/home', function () {
    return redirect()->action([RouteController::class, 'index']);
});

Route::fallback(function () {
    return redirect()->action([RouteController::class, 'index']);
});
