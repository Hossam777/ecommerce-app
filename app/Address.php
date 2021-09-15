<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'addressid', 'userid', 'address',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    protected $table = 'addresses';
}
