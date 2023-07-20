@extends('./layouts.products')

@section('producto')
<section class="py-5 d-flex justify-content-center">
    <div class="w-50">
        <h2 class="text-center">Carrito de compras</h2>

        @if(count($cart) > 0)
            @foreach($cart as $id => $item)
                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item['name'] }}</h4>
                        <p class="card-text">Cantidad: {{ $item['quantity'] }}</p>
                        <p class="card-text">Precio: {{ $item['price'] }}</p>
                    </div>
                </div>
            @endforeach

            <h3 class="text-center">Total: {{ $total }}</h3>

            <div class="d-flex justify-content-center mt-3">
                <a href="{{ route('cart.destroy') }}" class="btn btn-danger me-2">Vaciar carrito</a>
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <button class="btn btn-success" type="submit">Confirmar compra</button>
                </form>
            </div>
        @else
            <h3 class="text-center">Tu carrito está vacío</h3>
        @endif
    </div>
</section>


    
@endsection