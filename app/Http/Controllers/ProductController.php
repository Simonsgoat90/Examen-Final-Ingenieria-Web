<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller

{
    public function show($id)
    {
        $product = Product::find($id);

        return view('product', ['product' => $product]);
    }

    public function index(){
        $products = Product::paginate(10);
        
        return view('products', ['products' => $products]);
    }
}
