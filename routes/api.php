<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\ProductAPIController;

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

Route::apiResource('/product', 'API\ProductAPIController');
Route::apiResource('/status', 'API\StatusAPIController');
Route::apiResource('/category', 'API\CategoryAPIController');
Route::apiResource('/order', 'API\OrderAPIController');
Route::apiResource('/users', 'API\UserAPIController');
Route::apiResource('/orderlist', 'API\OrderListAPIController');
