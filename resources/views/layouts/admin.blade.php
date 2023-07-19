<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Administrativo</title>
    <script src="https://kit.fontawesome.com/ed820997a8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://unpkg.com/emoji.css/dist/emoji.min.css'>
    <link rel="shortcut icon" href="{{url('images/a.png')}}" type="image/x-icon">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
    }
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        width: 230px;
        background-color: #343a40;
        overflow-y: auto;
        transition: all 0.3s;
    }

    .sidebar h2 {
        color: #c2c7d0;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 30px;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar ul li {
        padding: 10px;
        border-bottom: 1px solid #444;
        transition: all 0.3s;
    }

    .sidebar ul li:hover {
        background-color: #4b545c;
    }

    .sidebar ul li a {
        color: #c2c7d0;
        text-decoration: none;
        font-size: 15px;
    }

    .content {
        margin-left: 250px;
        margin-top: 20px;
        padding: 20px;
    }

    .section {
        display: none;
    }


    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        text-align: left;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
        background-color: #e6e6e6;
    }


    #back-btn {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 0.7em;
        padding-left: 1em;
        padding-right: 1em;
        border-radius: 10px;
        border: none;
        color: black;
        background-color: rgb(222, 222, 222);
        transition: .4s ease-in-out;
        box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 1px;
    }

    #back-btn:hover {
        box-shadow: 6px 6px 0px #969696,
                -3px -3px 10px #ffffff;
        transform: translateX(-0.5em) translateY(-0.5em);
    }

    #back-btn:active {
        transition: .2s;
        transform: translateX(0em) translateY(0em);
        box-shadow: none;
    }

    /* Consulta de medios para pantallas más pequeñas */
    @media (max-width: 600px) {
        #back-btn {
            top: 26%; /* ajusta este valor según la altura de tu menú */
        }
        .content {
            margin-top: 40px;
        }
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .content {
            margin-left: 0;
        }
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Panel de Administración</h2>
        <ul>
            <li><a href="{{ route('admin.products.index') }}" class="menu" style="color: #fff; text-decoration: none;">Gestión de Inventario</a></li>
            <li><a href="{{ route('admin.users.index') }}" class="menu" style="color: #fff; text-decoration: none;">Gestión de Usuarios</a></li>
        </ul>
    </div>
    <div class="content">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="" id="back-btn">Cerrar Sesión</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <h1>Bienvenido al panel Administrativo</h1>
        <p>En este apartado podrás gestionar todo lo que necesites</p>
        @yield('content')
    </div>
    <script>
        @if (session('success'))
            Swal.fire(
                '¡Genial!',
                '{{ session('success') }}',
                'success'
            )
        @endif
    </script>
    
    
</body>
</html>