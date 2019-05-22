<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\ProductAttribute;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request){

        $pagination = 12;
        $categories = Category::withCount('products')->get();
        $minprice = ProductAttribute::min('price');
        $maxprice = ProductAttribute::max('price');

        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;

        }else {

            $products = Product::where('featured', true)->where(function($query) use($request){

                $min_price = $request->has('min_price') ? $request->input('min_price') : null;
                $max_price = $request->has('max_price') ? $request->input('max_price') : null;

                list($first, $min_price2) = array_pad(explode('RM', $min_price, 2),2,null);
                list($first, $max_price2) = array_pad(explode('RM', $max_price,2),2,null);

                $min_price3 = str_replace('.','', $min_price2);
                $max_price3 = str_replace('.','', $max_price2);
                // $min_price3 = filter_var($min_price2[1], FILTER_SANITIZE_NUMBER_INT);
                // $max_price3 = filter_var($max_price2[1], FILTER_SANITIZE_NUMBER_INT);

                if(isset($min_price) && isset($max_price)){
                    $query
                    ->where('price', '>=', $min_price3)
                    ->where('price', '<=', $max_price3);
                }

            });

            $categoryName = 'Featured';

            // dd($products);
        }

        if (request()->sort == 'name') {
            $products = $products->orderBy('name')->paginate($pagination);

        } elseif (request()->sort == 'price') {
            $products = $products->orderBy('price')->paginate($pagination);

            // dd($products);
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
        $data = ProductAttribute::select('size')
        ->where('colour', $request->colour)
        ->orWhere('gemstone', $request->gemstone)
        ->take(100)->get();

        return response()->json($data);
    }

    public function findProductId(Request $request){
        $prodid = ProductAttribute::select('id', 'size', 'price', 'gemstone', 'colour', 'sku')
        ->where('size', $request->size)
        ->where(function($query) use($request){
            $query
            ->where('gemstone', $request->gemstone)
            ->orWhere('product_id', $request->prodid)
            ->orWhere('colour', $request->colour);
        })->get();

        return response()->json($prodid);
    }

    public function findProductPrice(Request $request){
        $price = ProductAttribute::select('price', 'gemstone', 'colour')
        ->where('gemstone', $request->gemstone)
        ->orWhere('colour', $request->colour)->first();

        return response()->json($price);
    }

}
