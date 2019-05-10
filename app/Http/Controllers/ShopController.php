<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\ProductAttribute;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        
        $pagination = 9;
        $categories = Category::withCount('products')->get();
        $minprice = Product::min('price');
        $maxprice = Product::max('price');
        
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
            $products = $products->orderBy('price')->paginate($pagination);
        } else {
            $products = $products->paginate($pagination);
        }

        return view('pages.shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            'minprice' => $minprice,
            'maxprice' => $maxprice,

        ]);
    }

    public function show($slug)
    {
        $product = Product::with('attributes')->where('slug', $slug)->firstOrFail();
        // $product = json_decode(json_encode($product));
        // echo "<pre>"; print_r($product); die;
        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();
        // $stockLevel = getStockLevel($product->quantity);

        return view('pages.product')->with([
            'product' => $product,
            // 'stockLevel' => $stockLevel,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }

    /* public function search(Request $request)
    {
        return view('pages.search-results');
    } */

    public function findProductSize(Request $request){
        $data = ProductAttribute::select('size', 'gemstone', 'colour')->where('gemstone', $request->gemstone)->orWhere('colour', $request->colour)->take(100)->get();
        
        return response()->json($data);
    }

    public function findProductPrice(Request $request){
        $price = ProductAttribute::select('price')->where('gemstone', $request->gemstone)->orWhere('colour', $request->colour)->first();

        return response()->json($price);
    }
}
