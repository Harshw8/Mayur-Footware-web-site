<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

     protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'image',
        'size',
        'stock',
        'color',
        'original_price',
        'discount_price',
        'description',
    ];

    public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}

public function brand()
{
    return $this->belongsTo(Brand::class, 'brand_id');
}

}
