@extends('layouts.forms')

@section('content')
<a href="{{ url('/') }}" id="back-btn" class="btn">Volver</a>
<div class="form-container">
    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <img src="{{url('images/a.png')}}" alt="" class="logo">
        <p class="heading">Iniciar Sesión</p>
        <input class="input" placeholder="Correo" name="email" type="text">
        <input class="input" placeholder="Contraseña" name="password" type="password"> 
        <button class="btn">Ingresar</button>
        <p class="extra-links">
            <br>
            <a href="{{ route('register') }}">Registrarme</a>
        </p>
    </form>
</div>
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