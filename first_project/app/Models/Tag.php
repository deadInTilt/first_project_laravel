<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\Filterable;


class Tag extends Model
{
    use HasFactory;
    use Filterable;


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
