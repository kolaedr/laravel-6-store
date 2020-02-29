<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'img',
        'parent_id'
    ];

    public function product()
    {
        return $this->belongsToMany('App\Product', 'products_categories', 'category_id', 'product_id');
    }

    public function setImgAttribute($value)
    {
        $this->attributes['img'] = ucfirst($value);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = $value ? \Str::slug($value, '-'): \Str::slug($this->attributes['slug'], '-');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
