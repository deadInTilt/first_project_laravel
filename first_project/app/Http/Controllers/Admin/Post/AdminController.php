<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Filters\PostFilter;

class AdminController extends Controller
{
    public function __invoke(FilterRequest $request) {
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(10);
        
        return view('admin.post.index', compact('posts'));
    }
}