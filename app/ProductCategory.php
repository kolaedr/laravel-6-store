<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'products_categories';
    protected $fillable = [
        'product_id',
        'category_id',
    ];
    // public $timestamps = false;

    public function category()
    {
        return $this->belongsToMany('App\Category', 'products_categories', 'product_id', 'category_id');
    }

    public function product()
    {
        return $this->belongsToMany('App\Product', 'products_categories', 'category_id', 'product_id');
    }
}
