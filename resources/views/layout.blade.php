<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <style>
            /* Asegúrate de que solo los enlaces dentro de elementos con la clase 'activo' tengan los estilos aplicados */
            .activo > a {
                color: red;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <!-- <h1>Home</h1> -->
        <nav>
            {{-- dump(request()->routeIs('servicios')) --}}
            <table class="table">
                @include('partials.navbar')
            </table>
        </nav>        
        
        @yield('content')
        <script>
            $(document).ready(function() {
                // Mostrar la alerta solo si existe
                if ($('.alert').length) {
                    // Cerrar la alerta después de 5 segundos
                    setTimeout(function() {
                        $('.alert').alert('close');
                    }, 5000);
                }
            });
        </script>
    </body>
</html>
