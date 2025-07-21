<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController; // Importa el controlador

// Ruta para la página de bienvenida
Route::get('/', function () {
    return redirect('/admin');
})->name('home');

// Ruta para mostrar el listado de ventas
Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');

// Ruta para mostrar la factura de una venta específica
Route::get('/invoice/{saleId}', [SaleController::class, 'showInvoice'])
    ->name('invoice.show')
    ->where('saleId', '[0-9]+'); // Asegura que el ID sea numérico

// Rutas de recursos para manejar las ventas
Route::resource('sales', SaleController::class)->except(['index']); // Excluye 'index' ya que está definida manualmente

// Ruta para generar el reporte de ventas
Route::get('sales/report', [SaleController::class, 'report'])->name('sales.report');

// Ruta para crear una nueva venta
Route::get('sales/create', [SaleController::class, 'create'])->name('sales.create');

// Ruta para almacenar una nueva venta en la base de datos
Route::post('sales', [SaleController::class, 'store'])->name('sales.store');

// Ruta para editar una venta específica
Route::get('sales/{sale}/edit', [SaleController::class, 'edit'])->name('sales.edit');

// Ruta para actualizar una venta específica
Route::put('sales/{sale}', [SaleController::class, 'update'])->name('sales.update');

// Ruta para eliminar una venta específica
Route::delete('sales/{sale}', [SaleController::class, 'destroy'])->name('sales.destroy');
