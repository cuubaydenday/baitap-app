<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index() {
        return view('index');
    }

    public function shop() {
        $products = Product::all();
        return view('shop', compact('products'));
    }

    public function sproduct($id) {
        $product = Product::find($id);
        return view('sproduct', compact('product'));
    }

    public function cart() {
        return view('cart');
    }
}
