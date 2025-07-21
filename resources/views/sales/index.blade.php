<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ventas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Asegúrate de incluir tu CSS -->
</head>
<body>
    <div class="container">
        <!-- Agregamos el logo aquí -->
        <div class="text-center mb-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
        </div>
        <h1>Listado de Ventas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->client_name }}</td>
                        <td>{{ $sale->total }}</td>
                        <td>
                            <a href="{{ route('invoice.show', $sale->id) }}" class="btn btn-primary">Ver Factura</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
