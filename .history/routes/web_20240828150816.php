<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Import the Request class
Route::get('/', function () {
    return view('welcome'); 
});

Route::post('/posts', postCon);


Route::put('/{id}', function (Request $request , $id) {
    // dd($request->all());
    return $id;
});
Route::delete('/{id}', function ($id) {
    // dd($request->all());
    return $id;
});
// Route::view('/','post');
