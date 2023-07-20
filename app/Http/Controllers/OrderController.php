<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = Session::get('cart', []);
        $sales = [];

        foreach ($cart as $id => $item) {
            $product = Product::find($id);
            $product->product_amount -= $item['quantity'];
            $product->save();

            $sale = Sale::create([
                'date_sale' => now(),
                'id_product' => $id,
                'amount' => $item['quantity'],
                'id_user' => Auth::user()->id,
            ]);

            $sales[] = $sale->id;
        }

        Session::forget('cart');
        Session::put('sales', $sales);

        return redirect()->route('orders.show', Auth::user()->id)->with('success', 'Muchas gracias por su compra!! Esta es su factura');
    }




    public function show($id)
    {
        $sales = Sale::whereIn('id', Session::get('sales', []))->get();
        $totalSales = $sales->sum('total');

        // una vez que hemos recuperado las ventas, las eliminamos de la sesión
        Session::forget('sales');

        return view('orders.show', compact('sales', 'totalSales'));
    }


}