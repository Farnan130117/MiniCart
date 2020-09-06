<?php

namespace App\Http\Controllers;


use App\Product; // Added product 

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        dd($products);
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();  
        // getContent function inside Vendor\Darryldecode\Cart path;

        dd($cartCollection);
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }

}
