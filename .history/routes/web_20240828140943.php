<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.post');
});
Route::post('/', function (Request $request) {
    return view('post.post');
});
// Route::view('/','post');
