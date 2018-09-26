<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\CategoryProduct;
use App\Model\OrderDetail;

class Product extends Model
{
    protected $table = 'products';

    public function category_product()
    {
        return $this->hasMany(CategoryProduct::class);
    }
    
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
