<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'orderitemid', 'orderid', 'productid', 'productname', 'productimg', 'price', 'size', 'color', 'quantity'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
    
    protected $table = 'order_items';
}
