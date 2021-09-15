<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'categoryid', 'name',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
    
    protected $table = 'categories';
}
