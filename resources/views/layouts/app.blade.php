<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Óptica - @yield('title', 'Inicio')</title>
    <!-- Enlace a los estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @yield('styles') <!-- Aquí se cargará home.css solo en la página de inicio -->
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--@vite(['resources/css/navbar.css', 'resources/js/navbar.js']) Esto debería ser suficiente, así que puedes comentarlo si no estás usando Vite para cargar JS -->
</head>
<body>
    <!-- Incluir el encabezado desde partials/navbar.blade.php -->
    @include('partials.navbar')

    <!-- Contenido principal que cambiará en cada página específica -->
    <main>
        @yield('content')
    </main>

    <!-- Incluir el pie de página desde partials/footer.blade.php -->
    @include('partials.footer')

    <!-- Enlace a jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Enlace a los scripts JavaScript (opcional) -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
