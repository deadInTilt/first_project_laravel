<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use App\Http\Controllers\Controller;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
  
        return view('post.index', compact('posts'));
    }
}