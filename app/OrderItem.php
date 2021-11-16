<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'orderitemid', 'orderid', 'productname', 'productimg', 'productid', 'price', 'size', 'color'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
    
    protected $table = 'order_items';
}
