<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});


// Groupe de routes pour les vues d'administration

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/users', [AdminController::class, 'users']);

Route::get('/admin/settings', [AdminController::class, 'settings']);


    // Ajoutez d'autres routes d'administration ici
