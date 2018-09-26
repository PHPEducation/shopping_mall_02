<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\CategoryProduct;

class Category extends Model
{
    protected $table = 'categories';
    
    public function category_product()
    {
        return $this->hasMany(CategoryProduct::class);
    }
}
