@extends('./layouts.admin')

@section('content')
<h2>Editar Usuario</h2>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" class="form-control" value="{{ $user->dni }}" required>
        </div>

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="phone_number">Número de teléfono:</label>
            <input type="tel" id="phone_number" name="phone_number" class="form-control" value="{{ $user->phone_number }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="rol">Rol:</label>
            <select id="rol" name="rol" class="form-control" required>
                <option value="admin" {{ $user->rol == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->rol == 'user' ? 'selected' : '' }}>User</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection