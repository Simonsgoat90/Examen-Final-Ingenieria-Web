@extends('./layouts.admin')

@section('content')
<h2>Editar Producto</h2>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_code">Código del Producto:</label>
            <input type="text" id="product_code" name="product_code" class="form-control" value="{{ $product->product_code }}" required>
        </div>

        <div class="form-group">
            <label for="product_name">Nombre del Producto:</label>
            <input type="text" id="product_name" name="product_name" class="form-control" value="{{ $product->product_name }}" required>
        </div>

        <div class="form-group">
            <label for="product_name">Descripcion del Producto:</label>
            <input type="text" id="product_name" name="product_description" class="form-control" value="{{ $product->product_description }}" required>
        </div>

        <div class="form-group">
            <label for="product_price">Precio del Producto:</label>
            <input type="number" step="0.01" id="product_price" name="product_price" class="form-control" value="{{ $product->product_price }}" required>
        </div>

        <div class="form-group">
            <label for="product_amount">Cantidad del Producto:</label>
            <input type="number" id="product_amount" name="product_amount" class="form-control" value="{{ $product->product_amount }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection