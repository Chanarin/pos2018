<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\_POS_;
use App\Helpers\GH;
use App\Helpers\IDP;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\InvoiceRequest as StoreRequest;
use App\Http\Requests\InvoiceRequest as UpdateRequest;
use Illuminate\Support\Facades\Validator;

class InvoiceCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Invoice');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/invoice');
        $this->crud->setEntityNameStrings(_t('invoice'), _t('invoices'));

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumn([
            'name' => 'invoice_number',
            'label' => _t('Invoice Number'),
        ]);

        $this->crud->addColumn([
            'name' => '_date_',
            'label' => _t('Date'),
        ]);

        $this->crud->addColumn([
            'label' => _t('Customer'),
            'type' => 'select',
            'name' => 'customer_id',
            'entity' => 'customer',
            'attribute' => 'name',
            'model' => "App\Models\Customer",
        ]);

        $this->crud->addColumn([
            'name' => 'deposit',
            'label' => _t('Deposit'),
        ]);
        $this->crud->addColumn([
            'name' => 'complete_price',
            'label' => _t('Complete Price'),
        ]);
        $this->crud->addColumn([
            'name' => 'complete_date',
            'label' => _t('Complete Date'),
        ]);
        $this->crud->addColumn([
            'name' => 'exchange_rate',
            'label' => _t('Exchange Rate'),
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => _t('Status'),
        ]);
        $this->crud->addField([
            'name' => 'data',
            'type' => 'view',
            'data_type' => _POS_::invoice,
            'view' => 'pos.invoice.form'
        ]);
//        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
         $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);
        $u_level = GH::getUserLevel();
        if($u_level==1) {
            $this->crud->denyAccess(['update', 'delete']);
            //$this->crud->addClause('where', 'id', '=', GH::getUserID());
        }else if($u_level == 2){
            $this->crud->denyAccess(['delete']);
        }else if($u_level == 3){
            $this->crud->denyAccess(['delete']);
        }

//        $this->crud->addButtonFromModelFunction('line', 'addButtonCustom', 'addButtonCustom', 'beginning');

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
         $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
//         $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
//        dd($request->all());

        $validator = Validator::make($request->all(), [
            'invoice_number' => 'required',
            '_date_' => 'required',
            'customer_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin/invoice');
        }

//        dd($request->_data_);
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $iDP = new IDP($request->_data_,_POS_::invoice,$this->crud->entry->id);
        $iDP->saveAllDetail();


        if($request->is_pos>0){
//            return view('pos.sale.pos-print',['id'=>$this->crud->entry->id]);
            return redirect('/pos-print/'.$this->crud->entry->id);
        }else {
            return $redirect_location;
//            return redirect('/pos-print/'.$this->crud->entry->id);
        }
    }

    public function update(UpdateRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'invoice_number' => 'required',
            '_date_' => 'required',
            'customer_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin/invoice');
        }

        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $iDP = new IDP($request->_data_,_POS_::invoice,$this->crud->entry->id);
        $iDP->saveAllDetail();

        if($request->is_pos>0){
//            return view('pos.sale.pos-print',['id'=>$this->crud->entry->id]);
            return redirect('/pos-print/'.$this->crud->entry->id);
        }else {
            return $redirect_location;
        }

    }
}
