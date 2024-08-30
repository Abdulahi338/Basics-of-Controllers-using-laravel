<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // Capitalize controller class name
use Illuminate\Http\Request; // Import the Request class

// Corrected Route::resource usage
Route::resource('/', PostController::class);
