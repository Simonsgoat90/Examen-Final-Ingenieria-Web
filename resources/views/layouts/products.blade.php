<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto</title>
    <script src="https://kit.fontawesome.com/ed820997a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="productostyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://unpkg.com/emoji.css/dist/emoji.min.css'>
    <link rel="shortcut icon" href="{{url('images/a.png')}}" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');

    *{
        font-family: 'Lato', sans-serif;
        font-family: 'Oswald', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        background-color: #f0f2f5;
    }

    .content {
        min-height: 500px;
    }


    /*-------------------------------------Header------------------------------------ */

    .split-line {
        position: relative;
        height: 40px;
        background: linear-gradient(120deg, orange 50%, green 50%);
    }
    .header {
        background: white;
        color: white;
        padding: 20px;
        font-size: 2.5rem;
        height: auto; 
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .login-link {
        color: white;
        font-size: 1.2rem;
        text-decoration: none;
        border: 1px solid white;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        flex-direction: column;
        height: 60px;
        line-height: 60px;
        align-items: center;
        justify-content: center;
        padding-left: 5px;
        padding-right: 5px;
        background: orange;
    }

    .login-link:hover {
        background-color: darkorange;
    }

    .login-icon {
        font-size: 2rem;
        
    }

    .logo {
        height: 100px;
        cursor: pointer;
    }

    .title {
        line-height: 90px;
        color: black;
        cursor: pointer;
    }




    @media (max-width: 1024px) {
        .header {
            flex-direction: column;
        }

        .container {
            width: 80%; 
            max-width: none;
        }

        .form-control {
            width: 100%; 
        }
    }

    @media (max-width: 768px) {
        .header {
            padding: 15px;
        }

        .title {
            font-size: 2rem;
        }

        .login-link {
            font-size: 1rem;
        }

        .login-icon {
            font-size: 1rem;
        }

        .logo {
            height: 60px;
            width: 60px;
        }
    }

    @media (max-width: 480px) {
        .header {
            padding: 10px;
        }

        .title {
            font-size: 1.5rem;
        }

        .login-link {
            font-size: 0.8rem;
        }

        .login-icon {
            font-size: 0.8rem;
        }

        .logo {
            height: 50px;
            width: 50px;
        }
    }



    /*---------------Menu-------------------*/

    .navigation {
        background-color: white;
        padding: 10px 0;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        border-bottom: 1px solid gray;
    }

    .navigation ul {
        list-style: none;
        display: flex;
        justify-content: space-evenly;
        margin: 0;
        padding: 0;
    }

    .navigation ul li {
        font-size: 1.2rem;
    }

    .navigation ul li a {
        color: black;
        text-decoration: none;
        position: relative;
    }

    .navigation ul li a:hover {
        color: darkred;
    }

    .navigation ul li a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: darkred;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
    }

    .navigation ul li a:hover::after {
        visibility: visible;
        width: 100%;
    }




    @media (max-width: 768px) {
        .navigation ul li a {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 480px) {
        .navigation ul li a {
            font-size: 1rem;
        }
    }


    /*-----------------Product-Cards----------------*/

    .productos {
        margin-top: 50px;
    }

    .productos-text {
        text-align: center;
        margin-bottom: 55px;
        font-size: 3.5em;
    }


    a:link, a:visited, a:active {
        text-decoration:none;
    }


    .container-2 {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        margin-bottom: 50px;
    }

    .card {
        background-color:#fff;
        margin: 10px;
        border-radius: 10px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 300px;
    }
    .card-header img {
        background-color: #7ad7ff ;
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .card-body {
        background-color:#fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        min-height: 80px;
        color:black;
        
    }

    .card-body p {
        font-size: 13px;
        margin: 0 0 40px;
        color:black;
    }
    .user {
        background-color:#fff;
        display: flex;
        margin-top: auto;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        color:black;



    }


    .buy-button {
        width: 70%;
        background-color: darkorange;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        font-size: 16px;
        margin: 0 auto 10px auto;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .buy-button:hover {
        background-color: rgb(172, 112, 0);
    }

    .badge {
        padding: 10px;
        color: white;
        background-color: red;
        border-radius: 50%;
        font-size: 14px;
        z-index: 1;
        position: absolute;
        top: 10px;
        right: 10px;
    }




    /*---------------Carrito de compras--------------*/

    .shopping-cart {
        position: fixed;
        right: 20px;
        bottom: 20px;
        font-size: 2em;
        background-color: orange; /* Color de fondo naranja */
        border-radius: 50%; /* Bordes redondeados para hacer el contorno circular */
        width: 75px; /* Ancho del contenedor del icono */
        height: 75px; /* Alto del contenedor del icono */
        display: flex; /* Los siguientes tres estilos centran el icono */
        justify-content: center;
        align-items: center;
    }

    .shopping-cart a {
        color: #000; /* Color del icono */
        text-decoration: none; /* Elimina el subrayado del enlace */
    }

    .shopping-cart a:hover {
        color: #888; /* Color del icono al pasar el ratón por encima */
    }

    /*-------------Paginacion--------------*/

    .pagination {
        justify-content: center;
    }



    /*-----------------Footer----------------*/


    .footer-distributed {
        display: flex;
        justify-content: space-between;
        background-color: black;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        font: normal 16px sans-serif;
        padding: 45px 50px;
        color: white;
        bottom: 0;
        z-index: -2;
    }

    .footer-section {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .footer-section a {
        color: white;
    }

    .footer-section i {
        font-size: 24px;
        margin-bottom: 10px;
        text-decoration: none;
        color: white;
    }


    @media (max-width: 768px) {
        .footer-distributed {
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .footer-section {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 480px) {
        .footer-distributed {
            padding: 15px;
        }

        .footer-section p, .footer-section a {
            text-align: center;
        }
    }
    </style>
</head>
<body>
    <div class="split-line"></div>
    <header class="header">
        <img src="{{ url('images/a.png') }}" alt="" class="logo" onclick="window.location='{{ route('home') }}'">
        <div class="title" onclick="window.location='{{ route('home') }}'">Farma Innova</div>
        <div class="container p-1">
            <form method="GET" action="{{ route('products.index') }}" class="form-inline justify-content-center">
                <div class="container1">
                    <input type="text" class="form-control mr-sm-2" name="search" placeholder="¿Qué estás buscando?" value="">
                </div>
            </form>
        </div>
        @if(auth()->check())
            <a href="{{ route('logout') }}" class="login-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-user login-icon"></i>
                Cerrar sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="login-link">
                <i class="fas fa-user login-icon"></i>
                Iniciar sesión
            </a>
        @endif
    </header>

    <nav class="navigation">
        <ul>
            <li><a href="{{ route('products.index') }}">Productos<span class="ec ec-pill"></span></a></li>
            <li><a href="#">Ofertas<span class="ec ec-bomb"></span></a></li>
            <li><a href="#">Más Vendidos<span class="ec ec-bulb"></span></a></li>
        </ul>
    </nav>

    <main class="content">
        @yield('producto')
        @yield('relaciondos')        
        <div class="shopping-cart">
            <a href="{{ route('cart.index')}}"><i class="fa-solid fa-shopping-cart"></i></a>
        </div>
    </main>

    <footer class="footer-distributed">
        <div class="footer-section">
            <i class="fas fa-map-marker-alt"></i>
            <p>Av.Las américas 102-Arequipa</p>
        </div>
        <div class="footer-section footer-links">
            <p>Mario Hector</p>
            <p>Simón Ramirez</p>
            <p>Abel Quito</p>
            <p>Farma Innova &copy; 2023</p>
        </div>
        <div class="footer-section">
            <a href="#"><i class="fab fa-facebook-square"></i> FarmaInnova</a>
            <a href="#"><i class="fab fa-whatsapp"></i> Contactenos</a>
            <a href="#"><i class="fas fa-phone"></i> +51 987 880 760</a>
        </div>
    </footer>
    
</body>
</html>