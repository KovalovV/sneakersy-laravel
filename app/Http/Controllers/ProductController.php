<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = new Product();
        $product_by_id = $product->find($id);
        return view('product', ['product' => $product_by_id]);
    }

    public function buy($id)
    {
        $product = new Product();
        $product_by_id = $product->find($id);

        $product_by_id->update(['shoppings' => $product_by_id->shoppings + 1], ['touch' => false]);

        return redirect()->route('home');
    }
}

