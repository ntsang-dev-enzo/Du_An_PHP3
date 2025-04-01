<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'short_description',
        'thumbnail',
        'price',
        'category_id',
        'content',
        'sale_price',
        'status'
    ];
}
