<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Filterable;

class Post extends Model
{
    use HasFactory;
    use Filterable;


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
