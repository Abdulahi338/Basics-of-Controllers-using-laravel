<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Import the Request class

Route::get('/', function () {
    return view('post.post'); /ews/post/post.blade.php
});

// POST route for the homepage
Route::post('/', function (Request $request) {
    dd($request->all());
    // return view('welcome'); // Return the view located at resources/views/welcome.blade.php
});

// Route::view('/','post');
