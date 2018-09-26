<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Account;
use App\Model\Product;

class Review extends Model
{
    protected $table = 'reviews';

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
