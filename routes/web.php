<?php
use Illuminate\Http\Request;

Route::get('/lang/{l}', function ($l) {
    $arr_lang = ['en','km'];
    $la = in_array($l,$arr_lang)?$l:'km';
    session(['sess_lang' => $la]);
    return redirect()->back();
});

Route::get('/', function () {
    return redirect('/admin');
});

Route::get('admin/view-report', function () {
    return view('pos.report.table.index');
});

Route::get('admin/print-invoice', function () {
    return view('pos.invoice.index');
});

Route::get('/pos-print/{id}',function ($id){

   return view('pos.sale.pos-print',['id'=>$id]);
});

Route::get('/invoice-print/{id}',function ($id){

   return view('pos.invoice.invoice-print',['id'=>$id]);
});

Route::group(['prefix' => 'admin','namespace'=>'Admin', 'middleware' => 'admin'], function () {
    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    Route::any('user/change-pass','AdminUserCrudController@changePass');
    Route::patch('user/change-pass','AdminUserCrudController@changePassSave');

    CRUD::resource('exchangerate', 'ExchangeRateCrudController');

    CRUD::resource('adminuser', 'AdminUserCrudController');

    CRUD::resource('checklist', 'ChecklistCrudController');
    CRUD::resource('customer', 'CustomerCrudController');
    Route::get('customer-history', 'CustomerCrudController@cutomerOrderHistory');

    CRUD::resource('invoice', 'InvoiceCrudController');
    CRUD::resource('itemcategory', 'ItemCategoryCrudController');

    CRUD::resource('item', 'ItemCrudController');
    CRUD::resource('openitem', 'OpenItemCrudController');

    CRUD::resource('pos', 'POSCrudController');

    Route::get('/sale','POSCrudController@posSale');
    Route::get('/menu-item','POSCrudController@menuItem');
    Route::get('/menu-item/{?id}','POSCrudController@menuItemShow');

    CRUD::resource('production', 'ProductionCrudController');
    CRUD::resource('purchase', 'PurchaseCrudController');
    CRUD::resource('report', 'ReportCrudController');
    CRUD::resource('unit', 'UnitCrudController');

    Route::get('api/customer', 'CustomerCrudController@index2');
    Route::get('api/customer/{id}', 'CustomerCrudController@show2');

    Route::get('ajax-customer-phone', 'CustomerCrudController@getPhones');
    Route::get('ajax-customer-name', 'CustomerCrudController@getName');

    Route::get('api/item-category', 'ItemCategoryCrudController@index2');
    Route::get('api/item-category/{id}', 'ItemCategoryCrudController@show2');

    Route::get('ajax-open-item-number', 'OpenItemCrudController@getOpenNumber');
    Route::get('ajax-open-item-user', 'OpenItemCrudController@getUser');
    // [...] other routes

    //=========report type get by select=======
    Route::get('/report-type/sale/customer','ReportTypeController@saleCustomer');
    Route::get('/report-type/sale/customer/data','ReportTypeController@saleCustomerData');

    Route::get('/report-type/sale/discount','ReportTypeController@saleDiscount');
    Route::get('/report-type/sale/discount/data','ReportTypeController@saleDiscountData');

    Route::get('/report-type/sale/profit','ReportTypeController@saleProfit');
    Route::get('/report-type/sale/profit/data','ReportTypeController@saleProfitData');

    Route::get('/report-type/open-item/list','ReportTypeController@openItemList');
    Route::get('/report-type/open-item/list/data','ReportTypeController@openItemListData');
    Route::get('/report-type/open-item/detail','ReportTypeController@openItemDetail');

    Route::get('/report-type/purchase-item/list','ReportTypeController@purchaseItemList');
    Route::get('/report-type/purchase-item/list/data','ReportTypeController@purchaseItemListData');
    Route::get('/report-type/purchase-item/detail','ReportTypeController@purchaseItemDetail');

    Route::get('/report-type/production-item/list','ReportTypeController@productionItemList');
    Route::get('/report-type/production-item/list/data','ReportTypeController@productionItemListData');
    Route::get('/report-type/production-item/detail','ReportTypeController@productionItemDetail');

    Route::get('/report-type/sale/list','ReportTypeController@saleList');
    Route::get('/report-type/sale/list/data','ReportTypeController@saleListData');
    Route::get('/report-type/sale/detail','ReportTypeController@saleDetail');

    Route::get('/report-type/product/in-out/data','ReportTypeController@productInOutData');
    Route::get('/report-type/product/in-out','ReportTypeController@productInOut');

    Route::get('/report-type/sale/daily','ReportTypeController@saleDaily');

});
