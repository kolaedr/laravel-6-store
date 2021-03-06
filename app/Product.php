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
        return $this->belongsToMany('App\Category', 'products_categories', 'product_id', 'category_id');
        // return $this->hasManyThrough('App\Category', 'App\ProductCategory');
    }

    // public function pcategory()
    // {
    //     return $this->belongsToMany('App\ProductCategory', 'products_categories', 'product_id', 'category_id');
    // }

    public function setFavoriteAttribute($value)
    {
        $this->attributes['favorite'] = $value ==='on' ? true : false;
    }

    public function getImgAttribute($value)
    {
        // return 'images/no-image.png';
        return ($value ? $value :'images/no-image.png');
    }

    // scoupe
    public function scopeLike($query)
    {
        return $query->where('favorite', 1);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'DESC');
    }

    public function scopeMaxPrice($query, $max)
    {
        return $query->where('price', '<', $max);
    }
}
