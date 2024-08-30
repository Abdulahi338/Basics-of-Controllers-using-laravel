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
        $posts =[
            'Tufax',
            'Qaro',
            'Canbo'
        ];
        $name = 'Ali';
        $age = 23;
        return view('posts.index', ['userName' => $name, 'age' => $age,'post' =>$posts]);
    }
    
    // Other methods can remain empty for now
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('posts.show');
    }

    public function edit($id)
    {
        return view('posts.edit',compact());

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
