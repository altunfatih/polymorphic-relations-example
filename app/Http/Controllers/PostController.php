<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::create([
           'title' => $request->title,
           'detail' => $request->detail
        ]);

        Category::create([
            'title' => $post->title,
            'categoryable_id' => $post->id,
            'categoryable_type' => 'App\Models\Post'
            ]);

        return $post;
    }
}
