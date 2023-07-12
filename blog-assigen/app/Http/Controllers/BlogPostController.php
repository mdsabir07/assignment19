<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();
        return view('posts.index', ['posts' => $posts]);
    }



    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }
}
