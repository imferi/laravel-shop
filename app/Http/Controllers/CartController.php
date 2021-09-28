<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $cart = User::find(1)
            ->carts
            ->where('status', 'shopping')
            ->first();

//        return $cart->cartItems[0]->product;
////        ->name;
        return view('cart.index', ['cart' => $cart]);
    }


    public function addProduct(Product $product)
    {
//        TODO set user with auth
        $user = User::find(1);

        $cart = Cart::firstOrCreate([
            'user_id' => $user->id,
            'status' => "shopping"
        ], [
            'total_price' => 0
        ]);

        CartItem::create([
            'cart_id' => $cart->id,
            'product_id' => $product->id
        ]);

        $cart->total_price = $cart->total_price+$product->price;
        $cart->save();

        return redirect()->route('cart.index');
    }

    public function removeProduct(Product $product)
    {
//        TODO set user with auth
        $cart = User::find(1)->carts->where('status', 'shopping')->first();
        $cart->cartItems->where('product_id', $product->id)->first()->delete();
        $cart->total_price = $cart->total_price-$product->price;
        $cart->save();

        return back();
    }


}
