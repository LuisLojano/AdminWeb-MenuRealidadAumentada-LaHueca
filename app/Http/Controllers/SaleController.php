<?php

namespace App\Http\Controllers;

use App\Models\Sale; // Asegúrate de que el modelo esté en la ubicación correcta
use App\Http\Resources\SaleResource; // Importa el recurso de Sale
use App\Http\Resources\SalesReportResource; // Importa el recurso de reporte de ventas
use Illuminate\Http\Request;

class SaleController extends Controller
{
    // Método para mostrar el listado de ventas
    public function index()
    {
        $sales = Sale::all(); // Obtener todas las ventas
        return SaleResource::collection($sales); // Retornar la colección de ventas como recurso
    }

    // Método para mostrar la factura
    public function showInvoice($saleId)
    {
        $sale = Sale::findOrFail($saleId); // Obtener la venta por ID, o fallar con 404
        return view('invoice.show', compact('sale')); // Retornar la vista de la factura
    }

    // Método para mostrar el formulario de creación de ventas
    public function create()
    {
        return view('sales.create'); // Retornar la vista del formulario de creación
    }

    // Método para almacenar una nueva venta
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'total' => 'required|numeric',
            'pdf_path' => 'nullable|string',
            'product_p_id' => 'nullable|exists:product_p,id',
            'product_j_id' => 'nullable|exists:product_j,id',
        ]);

        $sale = Sale::create($validatedData); // Crear la nueva venta
        return redirect()->route('sales.index')->with('success', 'Venta creada con éxito.'); // Redirigir al listado de ventas
    }

    // Método para generar un reporte de ventas
    public function report()
    {
        $sales = Sale::all(); // Obtener todas las ventas
        return SalesReportResource::collection($sales); // Retornar la colección de reportes como recurso
    }
}