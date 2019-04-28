<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $title = 'Cart';
        return view('pages.cart')->with('title', $title);
    }
}
