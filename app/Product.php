<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'price',
        'describe',
        'image',
        'sku',
        'favorite'
    ];

    public function image()
    {
        return $this->hasMany('App\Image');
    }

    public function category()
    {
        return $this->hasMany('App\Category');
    }
}
