@extends('layouts.home')

@section('content')
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://cdn.pixabay.com/photo/2018/09/05/11/27/thermometer-3656065_1280.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2020/01/16/12/13/online-4770316_1280.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2017/03/13/21/41/scientist-2141259_1280.jpg" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="productos">
        <h2 class="productos-text">Productos Destacados</h2>
        <div class="container-2">
            @forelse($products as $product)
            <div class="card">
                <a href="{{ route('product.show', $product->id) }}">
                    <div class="card-header">
                        @if($product->product_image)
                            <img class="product-image" src="{{ $product->product_image }}" alt="{{ $product->product_name }}">
                        @else
                            <img class="product-image" src="{{ url('images/placeholder.webp') }}" alt="Placeholder">
                        @endif
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
            @empty
                <h2 class="text-center">No hay productos disponibles</h2>
            @endforelse
        </div>
    </div>


    
@endsection