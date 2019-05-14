<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function attributes(){
        return $this->hasMany('App\ProductAttribute');
    }

    public function presentPrice()
    {
        return 'RM'.number_format($this->price / 100, 2);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

}
