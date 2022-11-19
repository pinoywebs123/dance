<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_check'])->name('login_check');
Route::get('/apply', [AuthController::class, 'apply'])->name('apply');
Route::post('/apply', [AuthController::class, 'check_apply'])->name('check_apply');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
