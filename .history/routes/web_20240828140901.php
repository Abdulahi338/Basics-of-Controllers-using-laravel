<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.post');
});
Route::post('/', function (re) {
    return view('post.post');
});
// Route::view('/','post');
