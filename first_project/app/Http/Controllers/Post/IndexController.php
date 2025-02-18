<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Filters\PostFilter;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->get();
        dd($posts);

        $query = Post::query();

        if (isset($data['category_id'])) {
            $query->where('category_id', $data['category_id']);
        }

        if (isset($data['title'])) {
            $query->where('title', 'like', "%{$data['title']}%");
        }

        if (isset($content['content'])) {
            $query->where('content', 'like', "%{$content['content']}%");
        }

        $posts = $query->get();
        dd($posts);

        $posts = Post::where('is_published', 1)
            ->where('category_id', $data['category_id'])
            ->get();
  
        return view('post.index', compact('posts'));
    }
}