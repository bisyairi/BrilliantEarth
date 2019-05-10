<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'product_attribute';

    public function products(){
        return $this->belongsTo('App\Product');
    }

    public function presentPrice()
    {
        return 'RM'.number_format($this->price / 100, 2);
    }
}