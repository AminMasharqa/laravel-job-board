<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World!";
});

Route::get('/job', [JobController::class, 'index']);


    

