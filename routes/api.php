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

Route::middleware('cors')->get('/xyz',function (Request $request){
    //return $request->all();
   $arr = [
       ['id' =>1,'name' => 'dara'],
       ['id' =>2,'name' => 'nana'],
       ['id' =>3,'name' => 'nary'],
       ['id' =>2,'name' => 'nana'],
       ['id' =>3,'name' => 'nary'],
       ['id' =>2,'name' => 'nana'],
       ['id' =>3,'name' => 'nary'],
       ['id' =>2,'name' => 'nana'],
       ['id' =>3,'name' => 'nary'],
   ];
   return response()->json($arr);
});


Route::middleware('cors')->post('/xyz',function (Request $request){

    return $request->all();
   $arr = [
       ['id' =>$request->id,'name' => $request->name],
       ['id' =>2,'name' => 'xx'],
       ['id' =>3,'name' => 'xx'],
   ];
   return response()->json($arr);
});




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/item','Api\ItemController@index');
Route::get('/item/{id}','Api\ItemController@show');

Route::get('/unit','Api\UnitController@index');
Route::get('/unit/{id}','Api\UnitController@show');


Route::any('/item-search','Api\ItemController@showSearchResult');

Route::get('/report/open-item/list','Api\ReportController@openItemList');
Route::get('/report/open-item/detail','Api\ReportController@openItemDetail');

Route::get('/report/purchase-item/list','Api\ReportController@purchaseItemList');
Route::get('/report/purchase-item/detail','Api\ReportController@purchaseItemDetail');

Route::get('/report/production-item/list','Api\ReportController@productionItemList');
Route::get('/report/production-item/detail','Api\ReportController@productionItemDetail');

Route::get('/report/invoice/list','Api\ReportController@invoiceList');
Route::get('/report/invoice/detail','Api\ReportController@invoiceDetail');
