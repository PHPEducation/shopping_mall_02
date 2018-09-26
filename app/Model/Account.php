<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;
use App\Model\Comment;
use App\Model\Review;

class Account extends Model
{
    protected $table = 'accounts';

    protected $fillable = [
        'email',
        'name',
        'phone',
        'address',
        'status',
        'updated_at',
        'password',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function checkLoginAdmin($email, $password)
    {
        $email = strip_tags($email);
        $password = strip_tags($password);
        $infoAdmin = Account::where('role', '<', 1)->where([
            'email' => $email,
            'password' => $password,
            'status' => 1,
        ])->first();

        return $infoAdmin;
    }

    public function checkLoginUser($email, $password)
    {
        $email = strip_tags($email);
        $password = strip_tags($password);
        $infoUser = Account::where([
            'email' => $email,
            'password' => $password,
            'status' => 1,
        ])->first();
        
        return $infoUser;
    }
}
