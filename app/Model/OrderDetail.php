<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use App\Model\Order;

class OrderDetail extends Model
{
    protected $table = 'order_detail';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
