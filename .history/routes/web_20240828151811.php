<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // Capitalize controller class name
use Illuminate\Http\Request; // Import the Request class

// GET route to display the welcome view
Route::get('/', function () {
    return view('welcome'); 
});

// POST route to handle form submissions or data creation
Route::post('/posts', [PostController::class, 'index']);

// PUT route to update an existing resource
Route::put('/posts/{id}', [PostController::class, 'update']);

// DELETE route to delete a resource
Route::delete('/posts/{id}', [PostController::class, 'destroy']);
Rout::res