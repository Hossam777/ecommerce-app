<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'subcategoryid', 'categoryid', 'name', 
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
    
    protected $table = 'sub_categories';
}
