<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index() 
    {

        $post = Post::find(1);

        dd($post->category);
    }

    public function create() 
    {
        return view('post.create');

    }

    public function store() 
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
        ]);

        Post::create($data);

        return redirect()->route('post.index');
    }

    public function show(Post $post) 
    {
        return view ('post.show', compact('post'));
    }

    public function edit(Post $post) 
    {
        return view ('post.edit', compact('post'));
    }

    public function update(Post $post) {

        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
        ]);

        $post->update($data);

        return redirect()->route('post.show', $post->id);

    }

    public function destroy(Post $post) 
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function firstOrCreate() 
    {
        $post = Post::find(1);

        $anotherPost = 
        [
            'title' =>'New post',
            'content' => 'New content',
            'image' => 'image.jpg',
            'likes' => '777',
            'is_published' =>' 1',
        ];

        $post = Post::firstOrCreate([
            'title' =>'New post',
        ],[
            'title' =>'New post',
            'content' => 'New content',
            'image' => 'image.jpg',
            'likes' => '777',
            'is_published' =>' 1',

        ]);
        dump($post->content);
        dd('finished');
    }
}