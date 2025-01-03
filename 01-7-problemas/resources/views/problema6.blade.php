<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>

    <div class="container">
        <h1>Problema #6 - Grafica con condiciones</h1>
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Gráfica utilizando Progress Bar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($valores as $numero)
                    <tr>
                        <th scope="row">{{ $numero['numero'] }}</th>
                        <td>{{ $numero['valor'] }}</td>
                        <td>
                            <!-- Condicionar el color de la barra de progreso -->
                            @php
                                $color = 'bg-secondary'; // Valor por defecto si es menor que 61
                                if ($numero['valor'] >= 61 && $numero['valor'] <= 70) {
                                    $color = 'bg-danger';
                                } elseif ($numero['valor'] >= 71 && $numero['valor'] <= 80) {
                                    $color = 'bg-warning';
                                } elseif ($numero['valor'] >= 81 && $numero['valor'] <= 90) {
                                    $color = 'bg-info';
                                } elseif ($numero['valor'] > 90) {
                                    $color = 'bg-success';
                                }
                            @endphp

                            <!-- Progress bar con color dinámico -->
                            <div class="progress">
                                <div class="progress-bar {{ $color }}" role="progressbar"
                                    style="width: {{ $numero['valor'] }}%;" aria-valuenow="{{ $numero['valor'] }}"
                                    aria-valuemin="0" aria-valuemax="100">
                                    {{ $numero['valor'] }}%
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
