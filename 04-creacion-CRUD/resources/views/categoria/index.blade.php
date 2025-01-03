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
        <h1>Lista de Categorias</h1>
        @if (session("mensaje"))
            <div class="alert alert-success" role="alert">
                <strong>Mensaje</strong> {{ session('mensaje') }}
            </div>
        @endif
        <a href="{{ route('categorias.create') }}"><button type="button" class="btn btn-danger mb-3">Crear categoria</button></a>
        <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descripcion</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <th scope="row">{{ $categoria->id }}</th>
                        <td>{{ $categoria->descripcion }}</td>
                        <td>
                            <a href="{{ route('categorias.show', $categoria->id) }}"><button type="button" class="btn btn-info" ><i class="bi bi-eye"></i></button></a>
                            <a href="{{ route('categorias.edit', $categoria->id) }}"><button type="button" class="btn btn-info" ><i class="bi bi-pencil-square"></i></button></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoria{{ $categoria->id }}">
                                <i class="bi bi-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="categoria{{ $categoria->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog text-dark">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar categoria</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body " >
                                            Estas seguro que dease eliminar la categoria {{ $categoria->descripcion }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-primary">Si</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
