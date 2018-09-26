<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class PaymentMethod extends Model
{
    protected $table = 'payment_method';
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
