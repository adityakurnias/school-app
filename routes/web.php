<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/teacher', [TeacherController::class, 'listTeacher'])->name('listteacher');