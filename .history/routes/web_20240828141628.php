<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.post');
});
Route::post('/', function (Request $re) {
    dd($request->all());
});
// Route::view('/','post');
