<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('EnsureUserIsAdmin');
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_code' => 'required|string',
            'product_name' => 'required|string',
            'product_price' => 'required|numeric',
            'product_amount' => 'required|integer',
            'product_description' => 'required|string',
        ]);

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Producto creado con éxito.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'product_code' => 'required|string',
            'product_name' => 'required|string',
            'product_price' => 'required|numeric',
            'product_amount' => 'required|integer',
            'product_description' => 'required|string',
        ]);

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Producto actualizado con éxito.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Producto eliminado con éxito.');
    }
}