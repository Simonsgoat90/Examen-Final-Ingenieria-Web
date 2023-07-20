@extends('layouts.products')

@section('producto')
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                @if($product->product_image)
                    <img class="card-img-top mb-5 mb-md-0" src="{{ $product->product_image }}" alt="{{ $product->product_name }}">
                @else
                    <img class="card-img-top mb-5 mb-md-0" src="{{ url('images/placeholder.webp') }}" alt="Placeholder">
                @endif
            </div>
            <div class="col-md-6">
                <div class="small mb-1">Codigo: {{ $product->product_code }}</div>
                <h1 class="display-5 fw-bolder">{{ $product->product_name }}</h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through">{{ $product->product_price_original }}</span>
                    <span>${{ $product->product_price }}</span>
                </div>
                <p class="lead">
                    {{ $product->product_description }}
                </p>
                <div class="d-flex">
                    <form action="{{ route('products.addToCart', $product->id) }}" method="POST">
                        @csrf
                        <input class="form-control text-center me-3" name="quantity" type="number" value="1" style="max-width: 4rem" required>
                        <br>
                        <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Añadir al carrito
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

    
@endsection