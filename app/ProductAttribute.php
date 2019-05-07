<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'product_attribute';

    public function products(){
        return $this->belongsTo('App\Product');
    }
}