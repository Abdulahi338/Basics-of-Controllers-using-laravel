<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.post');
});
Route::post('/', function (Request) {
    dd($request->all());
});
// Route::view('/','post');
