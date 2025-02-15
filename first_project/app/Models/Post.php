<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'category_id',
        'tags',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tag() 
    {
        return $this->belongsToMany(Tag::class);
    }
}
