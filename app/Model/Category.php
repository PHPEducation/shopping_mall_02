<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Category extends Model
{
    protected $table = 'categories';
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
