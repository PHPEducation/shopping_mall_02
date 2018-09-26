<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Comment;

class Post extends Model
{
    protected $table = 'posts';
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
