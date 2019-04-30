<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class PagesController extends Controller
{
    // public function index(){
    //     // $title = 'Welcome to BrilliantEarth!';
    //     // return view('pages.index', compact('title'));
    //     // return view('pages.index')->with('title', $title);

    //     $products = Product::inRandomOrder()->take(8)->get();
    //     return view('pages.index')->with('products', $products);

    // }

    public function about(){
        $title = 'About US';
        return view('pages.about')->with('title', $title);
    }

    public function contactus(){
        $title = 'Contact Us';
        return view('pages.contact-us')->with('title', $title);
    }

    public function login(){
        $title = 'Login';
        return view('pages.login')->with('title', $title);
    }

    public function myaccount(){
        $title = 'My Account';
        return view('pages.my-account')->with('title', $title);
    }

    public function singleproduct(){
        $title = 'Single Product';
        return view('pages.single-product')->with('title', $title);
    }

    public function thankyou(){
        $title = 'Thank You!';
        return view('pages.thank-you')->with('title', $title);
    }

    public function wishlist(){
        $title = 'Wishlist';
        return view('pages.wishlist')->with('title', $title);
    }
}
