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
Route::post('/apply-check', [AuthController::class, 'apply_check'])->name('apply_check');
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

Route::group(['prefix'=> 'dashboard'], function(){

    Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');
    Route::get('/home', [AdminController::class, 'home'])->name('admin_home');
    Route::get('/home2', [AdminController::class, 'home2'])->name('admin_home2');
    Route::get('/members', [AdminController::class, 'members'])->name('admin_members');
    Route::get('/coaches', [AdminController::class, 'coaches'])->name('admin_coaches');
    Route::get('/coach-info/{id}', [AdminController::class, 'coach_info'])->name('admin_coach_info');
    Route::get('/coach-status/{id}', [AdminController::class, 'coach_status'])->name('admin_coach_status');
    Route::get('/dance-class', [AdminController::class, 'dance_class'])->name('admin_dance_class');
    Route::get('/audition', [AdminController::class, 'audition'])->name('admin_audition');
    Route::get('/audition-info/{id}', [AdminController::class, 'audition_info'])->name('admin_audition_info');
    Route::get('/audition-pass/{id}', [AdminController::class, 'audition_pass'])->name('admin_audition_pass');
    Route::get('/audition-fail/{id}', [AdminController::class, 'audition_fail'])->name('admin_audition_fail');
    Route::get('/announcement-new', [AdminController::class, 'announcement_new'])->name('admin_announcement_new');
    Route::post('/announcement-check', [AdminController::class, 'announcement_new_check'])->name('admin_announcement_new_check');
    Route::get('/announcement-archive/{id}', [AdminController::class, 'announcement_archive'])->name('admin_announcement_archive');

});
