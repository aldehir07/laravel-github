<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Title</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Productos</h1>
        @if (session("mensaje"))
            <div class="alert alert-success" role="alert">
                <strong>Excelente</strong> {{ session('mensaje') }}
            </div>
        @endif

        <a href="{{ route('producto.create') }}"><button type="button" class="btn btn-danger mb-3">Crear producto</button></a>

        <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                </tr>
            </thead>
            <tbody>

                @foreach($productos as $producto)
                <tr>
                    <th scope="row">{{ $producto->id }}</th>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->precio}}</td>
                    <td>{{ $producto->nombre_categoria }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
