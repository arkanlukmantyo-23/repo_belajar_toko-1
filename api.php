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
Route::get('/customers', 'customersController@show');
Route::post('/customers', 'customersController@store');

Route::get('/product', 'productController)show');
Route::get('/product/{id}', 'productController@detail');
Route::post('/product', 'productController@store');
Route::put('/product/{id}','productController@update');
Route::post('/orders', 'ordersController@store');
