<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add()
    {
        return redirect('products.list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->input('productname');
        $product->price = $request->input('price');
        $product->category = $request->input('category');

        $product->save();
        return redirect('/')->with('success', 'product saved successfully');
    }
}
