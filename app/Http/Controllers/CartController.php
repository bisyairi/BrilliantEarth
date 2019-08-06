<?php

namespace App\Http\Controllers;

use App\ProductAttribute;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\ValidAddCart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd(Cart::content());

        $cartItems = Cart::content();

        $ids = $cartItems->pluck('id');

        $models = ProductAttribute::with('products')->findMany($ids);

        return view('pages.cart')->with([
            'cartItems' => $cartItems,
            'models' => $models,
            'discount' => getNumbers()->get('discount'),
            'newSubtotal' => getNumbers()->get('newSubtotal'),
            'newTax' => getNumbers()->get('newTax'),
            'newTotal' => getNumbers()->get('newTotal'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidAddCart $request)
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
            'weight' => 0,
            'options' => [
                'size'=>$request->size,
                'gemstone'=>$request->gemstone,
                'slug'=>$request->slug,
                'sku'=>$request->sku,
                'colour'=>$request->colour,
                'image'=> $request->image]
        ]);

        // Cart::add([
        //     'id' =>$product->id,
        //     'name' =>$product->name,
        //     'qty' =>$product->qty,
        //     'price' =>$product->price,
        //     'weight' => 0,
        //     'options' => [
        //         'productid'=>$product->product_id,
        //         'size'=>$product->size,
        //         'gemstone'=>$product->gemstone,
        //         'slug'=>$product->slug,
        //         'sku'=>$product->sku,
        //         'colour'=>$product->colour,
        //         'image'=> $product->image]
        // ])->associate('App\ProductAttribute');

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

        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,6'
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 5.']));
            return response()->json(['success' => false], 400);
        }

        // if ($request->quantity > $request->productQuantity) {
        //     session()->flash('errors', collect(['We currently do not have enough items in stock.']));
        //     return response()->json(['success' => false], 400);
        // }

        Cart::update($id, $request->quantity);

        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Cart::destroy($id);

        return back()->with('success_message', 'Cart has been emptied!');
    }

    public function remove($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }

    /**
     * Switch item to add to the wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function wishlist($id)
    // {
    //     $item = Cart::get($id);

    //     Cart::remove($id);

    //     Cart::instance('addToWishlist')->add([
    //         'id' => id,
    //         'name' => name,
    //         'qty' => qty,
    //         'price' => price,
    //         'weight' => 0,
    //         'options' => [
    //             'size'=> size,
    //             'gemstone'=> gemstone,
    //             'slug'=> slug,
    //             'sku'=> sku,
    //             'colour'=> colour,
    //             'image'=> image]
    //     ]);

    //     return redirect()->route('cart.index')->with('success_message', 'Item has been added to your wishlist!');

    // }

}
