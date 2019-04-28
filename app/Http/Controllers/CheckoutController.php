<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $title = 'Checkout';
        return view('pages.checkout')->with('title', $title);
    }
}
