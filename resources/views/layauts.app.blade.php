<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajhh - Tu Aplicación</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('inventario.index') }}">Inventario</a></li>
                <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Cajhh - Tu Aplicación</p>
    </footer>
    <!-- Agrega aquí tus scripts JS si es necesario -->
</body>
</html>
