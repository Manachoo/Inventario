<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - sistema</title>
</head>
<body>
    <nav class="">
        @if (Auth::check())
            <ul>
                <li><a href="{{ route('logout') }}">Cerrar sesión de {{ Auth::user()->name }}</a></li>
            </ul>    
        @else
        <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Registro</a></li>
        </ul>
        @endif
    </nav>
    @yield('content')
</body>
</html>