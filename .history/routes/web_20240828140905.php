<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.post');
});
Route::post('/', function (reque) {
    return view('post.post');
});
// Route::view('/','post');
