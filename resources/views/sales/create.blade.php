<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nueva Venta</title>
</head>
<body>
    <h1>Registrar Nueva Venta</h1>

    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div>
            <label for="product_p_s_id">Platillo:</label>
            <select name="product_p_s_id" id="product_p_s_id">
                @foreach ($platillos as $platillo)
                    <option value="{{ $platillo->id }}">{{ $platillo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="product_j_s_id">Jugo:</label>
            <select name="product_j_s_id" id="product_j_s_id">
                @foreach ($jugos as $jugo)
                    <option value="{{ $jugo->id }}">{{ $jugo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="f_pagos_id">Forma de Pago:</label>
            <select name="f_pagos_id" id="f_pagos_id">
                @foreach ($formasPago as $formaPago)
                    <option value="{{ $formaPago->id }}">{{ $formaPago->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="total">Total:</label>
            <input type="number" name="total" id="total" step="0.01" required>
        </div>

        <button type="submit">Registrar Venta</button>
    </form>
</body>
</html>
