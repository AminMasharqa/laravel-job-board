<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: function () {
    return view('welcome');
});

Route::get('/job', action:[JobController::class,'index'])->name('index');
