<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCartItems()
    {
        $cartItems = [];

        $userId = Auth::id();
        $cartItems = Cart::latest()->where('user_id', $userId)->get();

        // dd(count($cartItems));

        return view('pages.cart', ["cartItems" => $cartItems]);
    }



    public function addProduct(Request $request)
    {

        $product = Product::findOrFail($request->product);
        $userId = Auth::id();

        $cartData = Cart::all()->where('user_id', $userId)->where('product_id', $request->product)->first();

        if ($cartData) {
            print_r($cartData);


            $cart = Cart::findOrFail($cartData->id);
            $prevQuantity = (int) $cart->quantity;

            $cart->quantity = $prevQuantity + 1;

            $cart->save();
        } else {
            $cart = new Cart();
            $cart->user_id = $userId;
            $cart->quantity = $request->quantity;
            $cart->product_id = $request->product;

            $cart->save();
        }



        // $cart = session()->get('cart', []);

        // if (isset($cart[$product->id])) {
        //     $cart[$product->id]['quantity']++;
        // } else {
        //     $cart[$product->id] = ["quantity" => 1];
        // }

        // session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product  added to cart!');
    }

    public function updateCart(Request $request, Cart $cart)
    {
        if ($request->updateItem == "add") {

            $cart->quantity = $cart->quantity + 1;
        } else {
            if ($cart->quantity > 1) {
                $cart->quantity = $cart->quantity - 1;
            } else {
                return redirect()->back()->with('error', 'Cannot deliver less than 1 item');
            }
        }

        $cart->save();
        return redirect()->back()->with('success', 'Product  Quantity edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCartItem(Cart $cart)
    {
        $cart->delete();
        return redirect()->back()->with('success', 'Product deleted From Cart!');
    }
}
