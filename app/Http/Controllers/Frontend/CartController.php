<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request , $id)
    {
        $product = Product::with('photos')->whereId($id)->first();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product , $id);
        $request->session()->put('cart' , $cart);
        return redirect()->back();
    }

    public function removeItem(Request $request , $id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($product , $id);
        $request->session()->put('cart' , $cart);
        return back();
    }
}
