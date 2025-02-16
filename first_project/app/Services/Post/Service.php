<?php

namespace App\Services\Post;
use App\Models\Post;


class Service 
{
    public function store($data)
    {
        $tags = $data['tags'];
        unset($data['tags']);
        
        $post = Post::firstOrCreate($data);
                
        $post->tag()->attach($tags);
    }

    public function update($post, $data)
    {
        $tags = $data['tags'];
        unset($data['tags']);
        
        $post->update($data);
        $post->tag()->sync($tags); 
    }
}