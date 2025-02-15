<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostController extends Controller
{
    public function index() 
    {
        //$posts=Post::all();
        $post = Post::find(1);
        $category = Category::find(1);
        $tag = Tag::find(2);
        dd($tag->posts);
        return view('post.index', compact('posts'));
    }

    public function create() 
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create', compact('categories', 'tags'));

    }

    public function store() 
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::firstOrCreate($data);
        
        $post->tag()->attach($tags);
      
        return redirect()->route('post.index');
    }

    public function show(Post $post) 
    {
        return view ('post.show', compact('post'));
    }

    public function edit(Post $post) 
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view ('post.edit', compact('post', 'categories', 'tags'));
        
    }

    public function update(Post $post) {

        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tag()->sync($tags); 

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