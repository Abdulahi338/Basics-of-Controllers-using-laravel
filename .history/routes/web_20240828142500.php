<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Import the Request class
Route::get('/', function () {
    return view('post.post'); 
});

// POST route for the homepage
// Route::post('/', function (Request $request) {
//     // dd($request->all());
//     return view('welcome'); 
// });

// Route::view('/','post');
