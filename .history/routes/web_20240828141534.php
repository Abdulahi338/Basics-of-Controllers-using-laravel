<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.post');
});
Route::post('/', function (R$request) {
    dd($request->all());
});
// Route::view('/','post');
