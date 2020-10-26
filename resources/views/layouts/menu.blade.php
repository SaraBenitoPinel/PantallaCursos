<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alumnos de - @yield ('titulo')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .fondo{
            background-image: url("{{asset('/img/fondo.jpg')}}");
        }
    </style>
</head>

<body class="fondo">
    @section('nombre')
    Esto es lo que se ve como titulo principal
    @show
    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>