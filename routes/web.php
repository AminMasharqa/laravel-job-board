<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', action:[IndexController::class,'index'])->name(name: 'index'); 
Route::get('/about', action:[IndexController::class,'about'])->name(name: 'about'); 
Route::get('/contact', action:[IndexController::class,'contact'])->name(name: 'contact'); 


Route::get('/job', action:[JobController::class,'index'])->name('index');
