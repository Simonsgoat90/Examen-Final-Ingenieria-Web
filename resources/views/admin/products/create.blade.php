@extends('./layouts.admin')

@section('content')
<h2>Crear Producto</h2>

    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="product_code">Código del Producto:</label>
            <input type="text" id="product_code" name="product_code" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_name">Nombre del Producto:</label>
            <input type="text" id="product_name" name="product_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_name">Descripcion del Producto:</label>
            <input type="text" id="product_name" name="product_description" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_price">Precio del Producto:</label>
            <input type="number" step="0.01" id="product_price" name="product_price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_amount">Cantidad del Producto:</label>
            <input type="number" id="product_amount" name="product_amount" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
@endsection