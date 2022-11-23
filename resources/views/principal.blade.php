
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/estilos.css">

        <title>MiBiblioteca</title>
    </head>
    <body>

        <div class="main-container d-flex">
            <div class="sidebar" id="side_nav">
                <div class="logo">
                    <img src="img/logo.png" alt="" >

                </div>

                <ul class="list-unstyled px-2">
                    <li class="px-3"><a href="{{route('libros.create')}}" class="text-decoration-none px-3 py-2 d-block">Libros</a></li>
                </ul>

                <ul class="list-unstyled px-2">
                    <li class="px-3"><a href="{{route('añadirLibro')}}" class="text-decoration-none px-3 py-2 d-block">Añadir libro</a></li>
                </ul>

                <ul class="list-unstyled px-2">
                    <li class="px-3"><a href="{{route('añadirUsuario')}}" class="text-decoration-none px-3 py-2 d-block">Añadir usuario</a></li>
                </ul>
                <ul class="list-unstyled px-2">
                    <li class="px-3"><a href="{{route('añadirPrestamo')}}" class="text-decoration-none px-3 py-2 d-block">Prestamos</a></li>
                </ul>


            </div>

            <div class="content">

            </div>



            <div class="container">
                @yield('contenido')
                    </div>






    </body>

</html>
