<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductAttribute;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();

        $ids = $cartItems->pluck('id');

        $models = ProductAttribute::with('products')->findMany($ids);

        return view('pages.cart')->with([
            'cartItems' => $cartItems,
            'models' => $models,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }

        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'weight' => '',
            'options' => [
                'size'=>$request->size,
                'gemstone'=>$request->gemstone,
                'slug'=>$request->slug,
                'sku'=>$request->sku,
                'colour'=>$request->colour,
                'image'=> $request->image]
        ]);

        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }
}
