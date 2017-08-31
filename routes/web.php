<?php

Route::get('/lang/{l}', function ($l) {
    $arr_lang = ['en','km'];
    $la = in_array($l,$arr_lang)?$l:'km';
    session(['sess_lang' => $la]);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/view-report', function () {
    return view('pos.report.table.index');
});

Route::get('admin/print-invoice', function () {
    return view('pos.invoice.index');
});



Route::group(['prefix' => 'admin','namespace'=>'Admin', 'middleware' => 'admin'], function () {
    Route::get('view-checklist','ChecklistCrudController@viewChecklist');
    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('checklist', 'ChecklistCrudController');
    CRUD::resource('customer', 'CustomerCrudController');
    CRUD::resource('invoice', 'InvoiceCrudController');
    CRUD::resource('itemcategory', 'ItemCategoryCrudController');
    CRUD::resource('item', 'ItemCrudController');
    CRUD::resource('openitem', 'OpenItemCrudController');
    CRUD::resource('pos', 'POSCrudController');

    Route::get('/sale','POSCrudController@posSale');
    Route::get('/menu-item','POSCrudController@menuItem');

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
});
