<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;    
use App\Http\Controllers\Auth\LoginController;

Route::get('/welcome', function () {
    return view('welcome');
});

//SITE
Route::get('/', [SiteController::class, 'index']);

//LOGIN
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);