<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->prefix('usuario')->group(function () {
//     Route::get('/',[ App\Http\Controllers\API\SinergiaController::class, 'getProfile']);
//     Route::post('/logout',[ App\Http\Controllers\API\SinergiaController::class, 'logout']);
// });

Route::prefix('clientes')->group(function () {
    Route::get('',[ App\Http\Controllers\API\ClientesController::class, 'getAllClientes']);
    Route::post('',[ App\Http\Controllers\API\ClientesController::class, 'saveClientes']);
    Route::put('',[ App\Http\Controllers\API\ClientesController::class, 'deleteClientes']);
});


Route::prefix('productos')->group(function () {
    Route::get('',[ App\Http\Controllers\API\ProductosController::class, 'getAllProductos']);
    Route::post('',[ App\Http\Controllers\API\ProductosController::class, 'saveProductos']);
    Route::put('',[ App\Http\Controllers\API\ProductosController::class, 'deleteProductos']);
});

Route::prefix('factura')->group(function () {
    Route::post('',[ App\Http\Controllers\API\FacturaController::class, 'saveFactura']);
    Route::post('/reportes',[ App\Http\Controllers\API\FacturaController::class, 'obtainReportes']);

});




