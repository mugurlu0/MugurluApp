<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class CartController extends Controller {
    public
    function __construct() {
        $this -> middleware('auth');
    }

    public
    function index() {

        $user = auth() -> user() -> id;
        $products = Cart::join('products', 'carts.product_id', '=', 'products.id') -> where('user_id', $user) ->get();
        $total = 0;
        foreach($products as $product) {
            $total += $product -> price * $product -> quantity;
        };
        return view('products.cart') -> with('products', $products) -> with('total', $total);

    }

    public
    function store(Request $request) {
        // Create cart
        
$id = $request -> input('product_id');
        // dd($user);
        $cart = Cart::where([['product_id', '=', $id], ['user_id', '=', Auth::id()]])->first();
        if ($cart) {
            $cart->quantity += $request->quantity;
            $cart -> save();
        } else {
            $cart = new Cart;
            $cart -> product_id = $request -> input('product_id');
            $cart -> user_id = auth() -> user() -> id;
            $cart -> quantity = $request -> input('quantity');
            $cart -> save();
        }

        return redirect() -> back() -> with('success', 'Product added to cart');
    }
    public
    function searchstore(Request $request) {
        // Create cart
        $cart = new Cart;
        $cart -> product_id = $request -> input('product_id');
        $cart -> quantity = $request -> input('quantity');
        $cart -> user_id = auth() -> user() -> id;
        $cart -> save();
        return back()->withInput();
        // return redirect() -> back() -> with('success', 'Product added to cart');
    }

    public
    function checkout($user_id) {
        $cart = Cart::where('user_id', $user_id) -> get();
        return view('products.checkout') -> with('cart', $cart);
    }

}
