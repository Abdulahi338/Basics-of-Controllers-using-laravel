<?php

namespace App\Http\Controllers;

use App\Models\Post; // Capitalize model name
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts[
            post1,
            post2,
            post3
        ];
        $name = 'Ali';
        $age = 23;
        return view('posts.index', ['userName' => $name, 'age' => $age]);
    }
    
    // Other methods can remain empty for now
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
