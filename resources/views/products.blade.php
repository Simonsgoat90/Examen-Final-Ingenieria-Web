@extends('layouts.products')

@section('producto')
    <div class="productos">
        <h2 class="productos-text">Productos</h2>
        <div class="container-2">
            @foreach($products as $product)
                <div class="card">
                    <a href="{{ route('product.show', $product->product_code) }}">
                        <div class="card-header">
                            <img class="product-image" src="{{ url('images/placeholder.webp') }}" alt="{{ $product->product_name }}">
                        </div>
                        <div class="card-body">
                            {{ $product->product_name }}
                        </div>
                        <div class="user">
                            <div class="user-info">Precio: ${{ $product->product_price }}</div> 
                        </div>
                    </a>
                    <button class="buy-button" onclick="window.location='{{ route('product.show', $product->id) }}'">Comprar</button>
                </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $products->links() }}
        </div>
    </div>
@endsection