@extends('./layouts.products')

@section('producto')
<div class="container">
    <h2>Factura del usuario #{{ Auth::user()->id }}</h2>
    
    @foreach($sales as $sale)
        <div>
            <h4>Producto: {{ $sale->product->product_name }}</h4>
            <p>Cantidad: {{ $sale->amount }}</p>
            <p>Precio por unidad: {{ $sale->product->product_price }}</p>
            <p>Total: ${{ $sale->total }}</p>
        </div>
    @endforeach

    <h3>Total de ventas: ${{ $totalSales }}</h3>
</div>
@endsection
