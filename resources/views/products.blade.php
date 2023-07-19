@extends('layouts.products')

@section('producto')
    <div class="productos">
        <h2 class="productos-text">Factura de la compra</h2>
        <div class="container-2">
            @foreach($sales as $sale)
                <div class="card">
                    <div class="card-header">
                        <h4 class="product-name">{{ $sale->product->product_name }}</h4>
                    </div>
                    <div class="card-body">
                        <p>Cantidad: {{ $sale->amount }}</p>
                        <p>Precio por unidad: ${{ $sale->product->product_price }}</p>
                        <p>Total: ${{ $sale->amount * $sale->product->product_price }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="total">
            <h3>Total de la compra: ${{ $totalSales }}</h3>
        </div>
    </div>
@endsection