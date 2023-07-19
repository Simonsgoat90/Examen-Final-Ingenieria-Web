<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Obtiene todos los productos
        return view('index', ['products' => $products]);
    }
}
