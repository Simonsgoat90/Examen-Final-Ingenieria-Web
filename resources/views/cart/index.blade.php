@extends('./layouts.products')

@section('producto')
<section class="py-5">
    <h2>Carrito de compras</h2>

    @foreach($cart as $id => $item)
        <div>
            <h4>{{ $item['name'] }}</h4>
            <p>Cantidad: {{ $item['quantity'] }}</p>
            <p>Precio: {{ $item['price'] }}</p>
        </div>
    @endforeach

    <h3>Total: {{ $total }}</h3>

    <a href="{{ route('cart.destroy') }}" class="btn btn-danger">Vaciar carrito</a>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <button class="btn btn-success" type="submit">Confirmar compra</button>
    </form>
    
</section>

    
@endsection