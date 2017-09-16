<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\GH;
use App\Models\Invoice;
use App\Models\Production;
use App\Models\Purchase;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use App\Models\Customer;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CustomerRequest as StoreRequest;
use App\Http\Requests\CustomerRequest as UpdateRequest;
use Illuminate\Support\Facades\Validator;

class CustomerCrudController extends CrudController
{
    public function index2(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term)
        {
            $results = Customer::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
        }
        else
        {
            $results = Customer::paginate(10);
        }

        return $results;
    }

    public function show2($id)
    {
        return Customer::find($id);
    }

    public function getPhones() {
        $term = $this->request->input('term');
        $options = Customer::where('phone', 'like', '%'.$term.'%')->get();
        return $options->pluck('phone', 'phone');
    }

    public function getName() {
        $term = $this->request->input('term');
        $options = Customer::where('name', 'like', '%'.$term.'%')->get();
        return $options->pluck('name', 'name');
    }

//    customer order history=========================
    public function cutomerOrderHistory(Request $request)
    {
        $row = Customer::find($request->customer_id);

        $row_invoice = Invoice::where('invoice.customer_id',$request->customer_id)->get();

        $row_production = Production::where('production.customer_id',$request->customer_id)->get();

        $row_purchase = Purchase::where('purchase.customer_id',$request->customer_id)->get();

        return view('pos.customer.order_history', ['row' => $row,
            'row_invoice' => $row_invoice, 'row_production' => $row_production,'row_purchase'=>$row_purchase]);
    }

    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Customer');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/customer');
        $this->crud->setEntityNameStrings(_t('Customer'), _t('Customers'));

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumn([
            'name' => 'name',
            'label' => _t('Name'),
        ]);

        $this->crud->addColumn([
            'name' => 'gender',
            'label' => _t('Gender'),
        ]);

        $this->crud->addColumn([
            'name' => 'phone',
            'label' => _t('Phone'),
        ]);
        $this->crud->addColumn([
            'name' => 'image',
            'label' => _t('image'),
            'type' => 'image',
            'attributes' => [
                'als' => 'Image',
                'class' => '',
                'style' => 'width: 60px; height: 40px',
            ],
            'link' => true,
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addColumn([
            'name' => 'description',
            'label' => _t('Description'),
        ]);

        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => _t('Created At'),
        ]);

        $this->crud->addField([
            'name' => 'name',
            'label' => _t('Name'),
        ]);

        $this->crud->addField([
            // select_from_array
            'name' => 'gender',
            'label' => _t("Gender"),
            'type' => 'select2_from_array',
            'options' => ['Male' => 'Male', 'Female' => 'Female'],
            'allows_null' => false,
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);

        $this->crud->addField([
            'name' => 'phone',
            'label' => _t('Phone'),
            'type' => 'text',
        ]);
        $this->crud->addField([
            'name' => 'description',
            'label' => _t('Description'),
            'type' => 'textarea',
        ]);
        $this->crud->addField([ // image
            'default' => asset('No_Image_Available.jpg'),
            'label' => "Image",
            'name' => "image",
            'type' => 'image2',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 3 / 2, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
        ]);

        $this->crud->addFilter([ // select2_ajax filter
            'name' => 'name',
            'type' => 'select2_ajax',
            'label'=> _t('Name'),
            'placeholder' => 'Pick a Name'
        ],
            url('admin/ajax-customer-name'), // the ajax route
            function($value) { // if the filter is active
                $this->crud->addClause('where', 'name', $value);
            });

        $this->crud->addFilter([ // select2_ajax filter
            'name' => 'phone',
            'type' => 'select2_ajax',
            'label'=> _t('Phone'),
            'placeholder' => 'Pick a Phone'
        ],
            url('admin/ajax-customer-phone'), // the ajax route
            function($value) { // if the filter is active
                $this->crud->addClause('where', 'phone', $value);
            });

        $this->crud->addFilter([ // dropdown filter
            'name' => 'gender',
            'type' => 'dropdown',
            'label'=> _t('Gender')
        ], [
            'Male' => 'Male',
            'Female' => 'Female'
        ], function($value) { // if the filter is active
            $this->crud->addClause('where', 'gender', $value);
        });

        $this->crud->addFilter([ // daterange filter
            'type' => 'date_range',
            'name' => 'created_at',
            'label'=> 'Created At'
        ],
            false,
            function($value) { // if the filter is active, apply these constraints
                $dates = json_decode($value);
                $this->crud->addClause('where', 'created_at', '>=', $dates->from);
                $this->crud->addClause('where', 'created_at', '<=', $dates->to);
            });


        $this->crud->addButtonFromModelFunction('line', 'addButtonCustom', 'addButtonCustom', 'beginning');

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
//        $this->crud->addButtonFromModelFunction('line', 'addButtonCustom', 'addButtonCustom', 'beginning');

        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:1|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('admin/customer');
        }
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:1|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('admin/customer');
        }
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
