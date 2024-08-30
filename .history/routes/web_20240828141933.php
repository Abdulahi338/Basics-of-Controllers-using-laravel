<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Import the Request class

// GET route for the homepage
Route::get('/', function () {
    return view('post.post'); // Return the view located at resources/views/post/post.blade.php
});

// POST route for the homepage
Route::post('/', function (Request $request) {
    // Optionally uncomment the line below to debug the incoming request data
    // dd($request->all());
    return view('welcome'); // Return the view located at resources/views/welcome.blade.php
});

// Route::view('/','post');
