<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.post');
});
Route::post('/', function (Request $request) {
    // dd($request->all());
    return v
});
// Route::view('/','post');
