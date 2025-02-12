<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function create() {
        $postsArr = [
            [
                'title' =>'My post 3',
                'content' => 'My content 3',
                'image' => 'image.jpg',
                'likes' => '5',
                'is_published' =>' 1',
            ],
            [
                'title' =>'My post 4',
                'content' => 'My content 4',
                'image' => 'image.jpg',
                'likes' => '7',
                'is_published' =>' 1',
            ],
        ];

        foreach ($postsArr as $item) {
            Post::create($item);
        }

        dd('created');
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

    public function contacts() {
        return view('contact');
    }

    public function main() {
        return view('main');
    }
    public function about() {
        return view('about');
    }
}