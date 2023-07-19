<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;



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

    public function addToCart(Request $request, $id)
    {
        // Obtén el producto de la base de datos
        $product = Product::find($id);
        
        // Verifica si el producto existe
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'El producto no existe.');
        }
        
        // Añade el producto al carrito
        $cart = Session::get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->product_name,
                'price' => $product->product_price,
                'quantity' => 1,
            ];
        }
        Session::put('cart', $cart);

        // Redirige al usuario al carrito con un mensaje de éxito
        return redirect()->route('cart.index')->with('success', 'Producto añadido al carrito correctamente!');
    }

}
