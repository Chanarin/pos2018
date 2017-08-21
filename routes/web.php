<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('checklist', 'Admin\ChecklistCrudController');
    CRUD::resource('customer', 'Admin\CustomerCrudController');
    CRUD::resource('invoice', 'Admin\InvoiceCrudController');
    CRUD::resource('itemcategory', 'Admin\ItemCategoryCrudController');
    CRUD::resource('item', 'Admin\ItemCrudController');
    CRUD::resource('openitem', 'Admin\OpenItemCrudController');
    CRUD::resource('pos', 'Admin\POSCrudController');
    CRUD::resource('production', 'Admin\ProductionCrudController');
    CRUD::resource('purchase', 'Admin\PurchaseCrudController');
    CRUD::resource('report', 'Admin\ReportCrudController');


    // [...] other routes
});
