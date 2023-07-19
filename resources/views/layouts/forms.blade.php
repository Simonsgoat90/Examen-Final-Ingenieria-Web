<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FarmaInnova</title>
    <script src="https://kit.fontawesome.com/ed820997a8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('images/a.png')}}" type="image/x-icon">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lato', sans-serif;
            font-family: 'Oswald', sans-serif;
        }

        body {
            background-color: #f0f2f5;
        }


        .logo {
            height: 150px; 
            width: auto;
            display: block;
            margin: 0 auto 20px auto;
        }


        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            background-color: white;
            padding: 2.5em;
            border-radius: 25px;
            transition: .4s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 1px 2px 2px;
            width: 50%; /* Ajusta este valor según el ancho que quieras darle a tu formulario */
            max-width: 500px;
        }
        
        .form:hover {
            transform: translateX(-0.5em) translateY(-0.5em);
            border: 1px solid #171717;
            box-shadow: 10px 10px 0px #666666;
        }
        
        .heading {
            color: black;
            padding-bottom: 2em;
            text-align: center;
            font-weight: bold;
        }
        
        .input {
            border-radius: 5px;
            border: 1px solid whitesmoke;
            background-color: whitesmoke;
            outline: none;
            padding: 0.7em;
            transition: .4s ease-in-out;
        }
        
        .input:hover {
            box-shadow: 6px 6px 0px #969696,
                    -3px -3px 10px #ffffff;
        }
        
        .input:focus {
            background: #ffffff;
            box-shadow: inset 2px 5px 10px rgba(0,0,0,0.3);
        }
        
        .form .btn {
            margin-top: 2em;
            align-self: center;
            padding: 0.7em;
            padding-left: 1em;
            padding-right: 1em;
            border-radius: 10px;
            border: none;
            color: black;
            transition: .4s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 1px;
        }
        
        .form .btn:hover {
            box-shadow: 6px 6px 0px #969696,
                    -3px -3px 10px #ffffff;
            transform: translateX(-0.5em) translateY(-0.5em);
        }
        
        .form .btn:active {
            transition: .2s;
            transform: translateX(0em) translateY(0em);
            box-shadow: none;
        }

        .extra-links {
        text-align: center;
        margin-top: 20px;
        }

        .extra-links a {
        color: black;
        text-decoration: none;
        }

        .extra-links a:hover {
        text-decoration: underline;
        }

        @media screen and (max-width: 1024px) {
            .form {
            width: 70%;
            min-height: 450px;
            }
        
            .logo {
            height: 100px;
            margin-bottom: 15px;
            }
        
            .input, .btn {
            font-size: 0.9em;
            }
        
            .heading {
            font-size: 1.2em;
            }
        }
        
        @media screen and (max-width: 768px) {
            .form {
            width: 85%;
            min-height: 400px;
            }
        
            .logo {
            height: 80px;
            margin-bottom: 10px;
            }
        
            .input, .btn {
            font-size: 0.8em;
            }
        
            .heading {
            font-size: 1em;
            }
        }
        
        @media screen and (max-width: 480px) {
            .form {
            width: 95%;
            min-height: 350px;
            }
        
            .logo {
            height: 60px;
            margin-bottom: 5px;
            }
        
            .input, .btn {
            font-size: 0.7em;
            }
        
            .heading {
            font-size: 0.9em;
            }
        }

        #back-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            padding: 0.7em;
            padding-left: 1em;
            padding-right: 1em;
            border-radius: 10px;
            border: none;
            color: black;
            background-color: white;
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

    </style>
</head>
<body>
    <main class="content">
        @yield('content')
    </main>
    <script>
        @if (session('success'))
            Swal.fire(
                '¡Buen trabajo!',
                '{{ session('success') }}',
                'success'
            )
        @elseif (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            });

        @endif
    </script>
</body>
</html>