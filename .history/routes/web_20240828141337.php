<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.post');
});
Route::posts('/', function (Request $request) {
    dd($request->all());
});
// Route::view('/','post');
