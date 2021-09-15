<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'orderid', 'userid', 'address', 'totalprice', 'promocode'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
    
    protected $table = 'orders';
}
