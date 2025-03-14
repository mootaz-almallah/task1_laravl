<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prfofileController; 

Route::get('/dd', function () {
    return view('welcome');
});

Route::get('/', [prfofileController::class, "indexfn"]); 

Route::get('/about', [prfofileController::class, "aboutfn"]); 

Route::get('/contact', [prfofileController::class, "contactfn"]); 
