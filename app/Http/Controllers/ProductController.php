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

    public function index(Request $request){
        $search = $request->get('search','');
        $products = Product::where('product_name', 'LIKE', '%' . $search . '%')->paginate(10);
        
        return view('products', compact('products'));
    }
}
