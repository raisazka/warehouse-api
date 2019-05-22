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
    Route::get('logout', 'AuthApiController@logout');
    Route::get('/items', 'ItemController@getAllItems');
    Route::get('/items/{id}', 'ItemController@showItem');
    Route::patch('/items/{id}', 'ItemController@updateItemStock');
    Route::get('/item-types', 'ItemController@getItemType');
    Route::get('/item/{id}', 'ItemController@getItem');
    Route::post('/stock-in', 'StockInController@createStockIn');
    Route::post('/cart', 'CartController@addToCart');
    Route::get('/cart', 'CartController@getCart');
    Route::get('/workers', 'WorkerController@getAllWorker');
    Route::get('/installers', 'InstallerController@getAllInstaller');
});
