@extends('./layouts.products')

@section('producto')
<div class="container py-5 d-flex justify-content-center">
    <div class="w-50">
        <h2 class="text-center">Factura del usuario #{{ Auth::user()->id }}</h2>
        
        @foreach($sales as $sale)
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">Producto: {{ $sale->product->product_name }}</h4>
                    <p class="card-text">Cantidad: {{ $sale->amount }}</p>
                    <p class="card-text">Precio por unidad: {{ $sale->product->product_price }}</p>
                    <p class="card-text">Total: ${{ $sale->total }}</p>
                </div>
            </div>
        @endforeach

        <h3 class="text-center">Total de ventas: ${{ $totalSales }}</h3>
    </div>
</div>
@endsection

