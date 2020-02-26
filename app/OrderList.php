<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    protected $table = 'order_item';

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
