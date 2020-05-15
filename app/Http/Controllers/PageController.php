<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {   
        // retornamos la vista posts con todos los posts
        $posts = Post::latest()->paginate(10);
        // $posts = Post::with('user')->latest()->paginate();
        return view('posts', compact('posts'));
    }

    public function post(Post $post)
    {   
        // retornamos la vista post con un  solo post
        return view('post', [
            'post' => $post
        ]);
    }
}
