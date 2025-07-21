<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura #{{ $sale->id }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Asegúrate de incluir tu CSS -->
</head>
<body>
    <div class="container">
        <h1>Factura #{{ $sale->id }}</h1>
        <p><strong>Cliente:</strong> {{ $sale->client_name }}</p>
        <p><strong>Total:</strong> {{ $sale->total }}</p>
        <p><strong>Fecha:</strong> {{ $sale->created_at->format('d/m/Y') }}</p>
        <!-- Agrega más detalles de la factura según sea necesario -->
    </div>
</body>
</html>
