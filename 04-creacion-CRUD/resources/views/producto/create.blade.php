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
        <h1>Crear producto</h1>


        <form action="{{ route('producto.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Codigo</label>
                <input type="text" class="form-control" name="codigo" value="{{old('codigo')}}" id="exampleInputText1" aria-describedby="textHelp">
                <div id="textHelp" class="form-text">{{$errors->first("codigo")}}</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}" id="exampleInputText1" aria-describedby="textHelp">
                <div id="textHelp" class="form-text">{{$errors->first("descripcion")}}</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad" value="{{old('cantidad')}}" id="exampleInputText1" aria-describedby="textHelp">
                <div id="textHelp" class="form-text">{{$errors->first("cantidad")}}</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio" value="{{old('precio')}}" step="0.01" id="exampleInputText1" aria-describedby="textHelp">
                <div id="textHelp" class="form-text">{{$errors->first("precio")}}</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Categoria</label>
                <select class="form-select " name="id_categoria" aria-label="Default select example">
                    <option selected disabled>Selecciona la categoria</option>
                    @foreach ($categorias as $categoria)
                        <option class="text-danger bg-dark" value="{{ $categoria->id}}" @if(old('id_categoria')==$categoria->id) selected @endif>{{ $categoria->descripcion }}</option>
                    @endforeach
                </select>
                <div id="textHelp" class="form-text">{{$errors->first("id_categoria")}}</div>

                <button type="submit" class="btn btn-warning mt-3">Agregar Producto</button>
                <div id="textHelp" class="form-text"></div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
