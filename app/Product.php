<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'productid', 'name', 'image1', 'image2', 'image3', 'price', 'sale', 'sizes', 'colors', 'description', 'category', 'subcategory'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
    
    protected $table = 'products';
}
