<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function presentPrice()
    {
        return '$'.number_format($this->price / 100, 2);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

}
