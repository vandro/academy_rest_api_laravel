<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clientes', 'Api\ClienteController@index');
Route::get('clientes/{cliente}/', 'Api\ClienteController@show');
Route::post('clientes/', 'Api\ClienteController@store');
Route::put('clientes/{cliente}/', 'Api\ClienteController@update');
Route::delete('clientes/{cliente}/', 'Api\ClienteController@destroy');



Route::get('categorias', 'Api\CategoriaController@index');
Route::get('categorias/{categoria}/', 'Api\CategoriaController@show');
Route::post('categorias/', 'Api\CategoriaController@store');
Route::put('categorias/{categoria}/', 'Api\CategoriaController@update');
Route::delete('categorias/{categoria}/', 'Api\CategoriaController@destroy');

Route::get('modopagos', 'Api\ModoPagoController@index');
Route::get('modopagos/{modopago}/', 'Api\ModoPagoController@show');
Route::post('modopagos/', 'Api\ModoPagoController@store');
Route::put('modopagos/{modopago}/', 'Api\ModoPagoController@update');
Route::delete('modopagos/{modopago}/', 'Api\ModoPagoController@destroy');

Route::get('facturas', 'Api\FacturaController@index');
Route::get('facturas/{factura}/', 'Api\FacturaController@show');
Route::post('facturas/', 'Api\FacturaController@store');
Route::put('facturas/{factura}/', 'Api\FacturaController@update');
Route::delete('facturas/{factura}/', 'Api\FacturaController@destroy');

Route::get('productos', 'Api\ProductoController@index');
Route::get('productos/{producto}/', 'Api\ProductoController@show');
Route::post('productos/', 'Api\ProductoController@store');
Route::put('productos/{producto}/', 'Api\ProductoController@update');
Route::delete('productos/{producto}/', 'Api\ProductoController@destroy');

Route::get('detalles', 'Api\DetalleController@index');
Route::get('detalles/{detalle}/', 'Api\DetalleController@show');
Route::post('detalles/', 'Api\DetalleController@store');
Route::put('detalles/{detalle}/', 'Api\DetalleController@update');
Route::delete('detalles/{detalle}/', 'Api\DetalleController@destroy');
