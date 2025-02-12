<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {

        $posts = Post::all();

        return view('post.index', compact('posts'));
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

    public function update() {
        $post = Post::find(8);
        
        $post->update([
            'is_published' => 0,
        ]);

        dd('uodated');

    }

    public function delete() {
        $post = Post::find(7);
        $post->delete();

        dd('deleted');
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