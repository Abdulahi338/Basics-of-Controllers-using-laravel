<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Import the Request class
Route::get('/', function () {
    return view('welcome'); 
});

Route::post('/posts',[postController::class,'index']);


Route::put('/posts{id}', [postController::class,'update'])
 
Route::delete('/posts{id}', function ($id) {
 
// Route::view('/','post');
