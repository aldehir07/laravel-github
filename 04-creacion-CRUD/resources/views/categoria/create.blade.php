<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <div class="container">
        <h1>Crear categoria</h1>
        <form action="{{ route('categorias.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" value="{{ old('descripcion') }}" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
                <div id="textHelp" class="form-text">{{ $errors->first("descripcion") }}</div>
                <button type="submit" class="btn btn-warning">Crear Categoria</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
