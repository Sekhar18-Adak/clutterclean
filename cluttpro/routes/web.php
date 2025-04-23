<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomPasswordResetController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'check'])->name('login.post');
Route::get('/logout',[AuthController::class,'exit'])->name('logout');
Route::get('/register',[AuthController::class,'create'])->name('register');
Route::post('/register',[AuthController::class,'store'])->name('register.post');
// dashboard route 
// Route::get('/dashboard/D1', [DashboardController::class, 'DASHBOARD'])->name('DASHBOARD');
Route::get('/dashboard', [DashboardController::class, 'showNextTasks'])->name('next.tasks');
Route::get('/tasks/complete', [DashboardController::class, 'markTasksComplete'])->name('tasks.complete');
//forgot password
Route::get('/forgot-password', [CustomPasswordResetController::class, 'showResetForm'])->name('custom.password.form');
Route::post('/forgot-password', [CustomPasswordResetController::class, 'reset'])->name('custom.password.reset');