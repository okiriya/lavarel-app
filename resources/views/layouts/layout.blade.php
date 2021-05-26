<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PizzaHouse</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- <link rel="stylesheet" href="/css/main.css"> -->
        <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="/css/styles.css">

    </head>
    <body class="antialiased">
        <header>
            <div class="container d-flex justify-content-between align-items-center">
                <a href="/">PIZZA</a>
                <ul class="d-flex">
                    @auth
                    <li>
                        <a href="">Yuri Nsaako</a>
                    </li>
                    <li>
                        <a href="{{ route('register')}}">Logout</a>
                    </li>
                    @endauth

                    @guest
                    <li>
                        <a href="{{ route('login')}}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register')}}">Register</a>
                    </li>
                    @endguest
                </ul>
            </div>
            
        </header>
            @yield('content')
        
        <footer>
            <div class="container">
                copyright 2020 PizzaHouse
            </div>
        </footer>
    </body>
</html>

