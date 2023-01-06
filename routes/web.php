<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\MemberController;


Route::get('/', function () {
    return view('auth.index');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_check'])->name('login_check');
Route::get('/apply', [AuthController::class, 'apply'])->name('apply');
Route::post('/apply', [AuthController::class, 'check_apply'])->name('check_apply');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');

Route::get('/about', function(){
    return view('auth.about');
})->name('about');
Route::get('/faqs', function(){
    return view('auth.faqs');
})->name('faqs');
Route::get('/new-password', function(){
    return view('auth.new_password');
})->name('new_password');
Route::get('/success', function(){
    return view('auth.register_success');
})->name('success');

Route::get('/apply2', function(){
    return view('auth.apply2');
})->name('apply2');

Route::get('/apply3', function(){
    return view('auth.apply3');
})->name('apply3');


Route::group(['prefix'=> 'coach'], function(){

    Route::get('/home', [CoachController::class, 'home'])->name('coach_home');

});
