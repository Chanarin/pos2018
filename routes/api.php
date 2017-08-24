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

Route::get('/item','Api\ItemController@index');
Route::get('/item/{id}','Api\ItemController@show');
Route::any('/item-search','Api\ItemController@showSearchResult');

Route::get('/report/open-item/list','Api\ReportController@openItemList');
Route::get('/report/open-item/detail','Api\ReportController@openItemDetail');

Route::get('/report/purchase-item/list','Api\ReportController@purchaseItemList');
Route::get('/report/purchase-item/detail','Api\ReportController@purchaseItemDetail');

Route::get('/report/production-item/list','Api\ReportController@productionItemList');
Route::get('/report/production-item/detail','Api\ReportController@productionItemDetail');
