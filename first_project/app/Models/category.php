<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\Filterable;


class Category extends Model
{
    use HasFactory;
    use Filterable;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
