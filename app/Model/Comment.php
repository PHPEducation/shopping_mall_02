<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Account;
use App\Model\Post;

class Comment extends Model
{
    protected $table = 'comments';

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
