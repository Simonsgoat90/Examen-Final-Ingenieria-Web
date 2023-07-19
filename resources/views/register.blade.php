@extends('layouts.forms')

@section('content')
<a href="{{ url('/') }}" id="back-btn" class="btn">Volver</a>
<div class="form-container">
    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <img src="{{url('images/a.png')}}" alt="" class="logo">
        <p class="heading">Registrarse</p>
        <input class="input" placeholder="DNI" name="dni" type="text">
        <input class="input" placeholder="Nombre" name="name" type="text">
        <input class="input" placeholder="Celular" name="phone" type="text">
        <input class="input" placeholder="Correo" name="email" type="email">
        <input class="input" placeholder="Contraseña" name="password" type="password">
        <button class="btn">Registrar</button>
        <p class="extra-links">
            <a href="{{ route('login') }}">Ya tienes una cuenta? Inicia sesión</a>
        </p>
    </form>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    @if ($errors->any())
        var errorText = '';
        @foreach ($errors->all() as $error)
            errorText += '{{ $error }}<br>';
        @endforeach
    
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: errorText,
        });
    @endif
    
    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
        });
    @endif
    </script>
    
@endsection