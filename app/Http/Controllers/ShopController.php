<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        
        $pagination = 9;
        $categories = Category::withCount('products')->get();
        
        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        } else {
            $products = Product::where('featured', true);
            $categoryName = 'Featured';
        }

        if (request()->sort == 'name') {
            $products = $products->orderBy('name')->paginate($pagination);
        } elseif (request()->sort == 'price') {
            $products = $products->orderBy('price', 'asc')->paginate($pagination);
        } else {
            $products = $products->paginate($pagination);
        }

        return view('pages.shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,

        ]);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();

        $stockLevel = getStockLevel($product->quantity);

        return view('product')->with([
            'product' => $product,
            'stockLevel' => $stockLevel,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
}
