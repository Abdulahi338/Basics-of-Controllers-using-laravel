<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Import the Request class
Route::get('/', function () {
    return view('welcome'); 
});

Route::post('/', function (Request $request) {
    dd($request->all());
});

Route::put('/{$id}', function (Request $request,$id) {
    // dd($request->all());
    return $id;
});
// Route::view('/','post');
