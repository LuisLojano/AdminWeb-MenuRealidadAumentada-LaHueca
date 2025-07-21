<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura #{{ $sale->id }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Incluye tu CSS aquí si es necesario -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        .details {
            margin: 20px 0;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Muestra el logo de la empresa -->
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo de la Empresa" style="max-width: 200px;">
    </div>

    <h1>{{ $datosG->nombre_empresa }}</h1>
    <p>RUC: {{ $datosG->ruc }}</p>
    <p>Dirección: {{ $datosG->direccion }}</p>
    <p>Teléfono: {{ $datosG->telefono }}</p>
    <hr>

    <h2>Factura No: {{ $sale->id }}</h2>
    <p>Fecha: {{ $sale->created_at->format('d-m-Y') }}</p>
    <div class="details">
        <p><strong>Platillo:</strong> {{ $platillo ? $platillo->nombre : 'N/A' }}</p>
        <p><strong>Jugo:</strong> {{ $jugo ? $jugo->nombre : 'N/A' }}</p>
        <p><strong>Total:</strong> ${{ number_format($sale->total, 2) }}</p>
    </div>
</body>
</html>
