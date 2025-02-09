<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $titles) {
            dump($titles->title);
        }
    }

    public function create() {
        $postsArr = [
            [
                'title' =>' title from vscode',
                'content' => 'content from vscode',
                'image' => 'image from vscode',
                'likes' => '999999',
                'is_published' =>' 1',
            ],
            [
                'title' =>' another title from vscode',
                'content' => 'another content from vscode',
                'image' => 'another image from vscode',
                'likes' => '999999',
                'is_published' =>' 1',
            ],
        ];

        foreach ($postsArr as $item) {
            Post::create($item);
        }

        dd('created');
    }

    public function update() {
        $post = Post::find(6);
        
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 11111,
            'is_published' => 0,
        ]);
    }

    public function delete() {
        $post = Post::find(3);
        $post->delete();

        dd('deleted');
    }
}