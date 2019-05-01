<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){

        $newproduct1 = Product::where('featured', true)->take(8)->limit(1)->inRandomOrder()->get();
        $newproduct2 = Product::where('featured', true)->take(8)->limit(1)->inRandomOrder()->get();
        $newproduct3 = Product::where('featured', true)->take(8)->limit(1)->inRandomOrder()->get();
        $newproduct4 = Product::where('featured', true)->take(8)->limit(1)->inRandomOrder()->get();
        $featured = Product::where('featured', true)->take(8)->inRandomOrder()->get();
        $newtrends = Product::where('new_trend', true)->take(8)->inRandomOrder()->get();
        
        return view('pages.landing-page')->with([
            'newproduct1' => $newproduct1,
            'newproduct2' => $newproduct2,
            'newproduct3' => $newproduct3,
            'newproduct4' => $newproduct4,
            'featured' => $featured,
            'newtrend' => $newtrends,
        ]); 
    }
}
