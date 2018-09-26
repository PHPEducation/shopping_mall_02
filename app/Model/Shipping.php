<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class Shipping extends Model
{
    protected $table = 'shipping';
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
