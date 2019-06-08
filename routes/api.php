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

Route::post('login', 'AuthApiController@login');
Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/get-stock-in/{warehouseId}', 'ReportController@getWeeklyStockInReport');
    Route::get('/get-stock-out/{warehouseId}','ReportController@getWeeklyStockOutReport');
    Route::get('/monthly-report/{warehouseId}', 'ReportController@getMonthlyReport');
    Route::get('/adjustment-report', 'ReportController@getAdjustmentReport');
    Route::get('logout', 'AuthApiController@logout');
    Route::get('/items/warehouse/{warehouseId}', 'ItemController@getItems');
    Route::get('/items/{id}', 'ItemController@showItem');
    Route::patch('/items/{id}', 'ItemController@updateItemStock');
    Route::get('/item-types', 'ItemController@getItemType');
    Route::get('/item/{id}/{warehouseId}', 'ItemController@getItem');
    Route::post('/stock-in', 'StockInController@createStockIn');
    Route::post('/cart', 'CartController@addToCart');
    Route::get('/cart', 'CartController@getCart');
    Route::get('/cart-in', 'CartStockInController@getCart');
    Route::post('/cart-in', 'CartStockInController@addToCart');
    Route::get('/staffs', 'StaffController@getAllStaff');
    Route::post('/stock-out', 'StockOutController@createStockOut');
    Route::delete('/cart/{id}', 'CartController@deleteCart');
    Route::delete('/cart-in/{id}', 'CartStockInController@deleteCart');
});
