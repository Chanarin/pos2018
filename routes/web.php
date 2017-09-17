<?php

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


Route::get('/api/item/get-all-detail',function (\Illuminate\Http\Request $request){
    $m = \App\Models\ItemDetail::where('ref_id',$request->item_id)->get();

    if(count($m)>0){
        $arr = [];
        foreach ($m as $row){
            $arr[] = [
                'id'=> $row->id,
                'item_id'=> $row->item_id,
                'item_code'=>$row->item_code,
                'title'=> $row->title,
                'description'=> $row->description,
                'unit'=> $row->unit,
                'num_qty'=> $row->num_qty,
                'qty'=> $row->qty,
                'cost'=> $row->cost,
                'price'=> $row->price,
                'discount'=> $row->discount==null?0:$row->discount,
                'note'=> $row->note
            ];
        }
        return $arr;
    }else{
        return [];
    }

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
});
