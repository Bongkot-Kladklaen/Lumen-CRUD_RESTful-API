<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id', 
        'product_category',
        'product_name',
        'product_detail',
        'unit_price',
        'thumbnail'
    ];

    public $timestamps = false;
}
