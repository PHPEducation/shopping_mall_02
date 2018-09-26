<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use App\Model\Category;

class CategoryProduct extends Model
{
    protected $table = 'category_product';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
