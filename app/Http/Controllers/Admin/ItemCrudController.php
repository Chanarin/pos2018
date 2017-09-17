<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\_POS_;
use App\Helpers\GH;
use App\Helpers\IDP;
use App\Models\InvoiceDetail;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ItemRequest as StoreRequest;
use App\Http\Requests\ItemRequest as UpdateRequest;

class ItemCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Item');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/item');
        $this->crud->setEntityNameStrings(_t('Item'), _t('Items'));

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumn([
            'label' => _t('Category'),
            'type' => 'select',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'title',
            'model' => "App\Models\ItemCategory",
        ]);

        $this->crud->addColumn([
            'name' => 'item_code',
            'label' => _t('Code'),
        ]);

        $this->crud->addColumn([
            'name' => 'title',
            'label' => _t('Title'),
        ]);

        $this->crud->addColumn([
            'name' => 'image',
            'label' => _t('image'),
            'type' => 'image2m',
            'attributes' => [
                'als' =>'Image',
                'class' =>'',
                'style' =>'width: 60px; height: 40px',
            ],
            'link' => true,
        ]);

        $this->crud->addColumn([
            'label' => _t('Unit'),
            'type' => 'select',
            'name' => 'unit',
            'entity' => 'units',
            'attribute' => 'name',
            'model' => "App\Models\Unit",
        ]);

        $this->crud->addColumn([
            'name' => 'price',
            'label' => _t('Price'),
        ]);
        //=============================
        //=============================

        $this->crud->addField([    // WYSIWYG
            'name' => 'item_form',
            'type' => 'view',
            'data_type' => _POS_::items,
            'view' => 'pos.item.form'
        ]);

        $this->crud->enableAjaxTable();

        $u_level = GH::getUserLevel();
        if($u_level==1) {
            $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);
            //$this->crud->addClause('where', 'id', '=', GH::getUserID());
        }else if($u_level == 2){
            $this->crud->denyAccess(['delete']);
        }else if($u_level == 3){
            $this->crud->denyAccess(['delete']);
        }

    }

    public function store(StoreRequest $request)
    {
//        dd($request->_data_);
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry

        $iDP = new IDP($request->_data_,_POS_::items,$this->crud->entry->id);
        $iDP->saveAllDetail();

        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {

        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $inv = InvoiceDetail::where('item_id',$this->crud->entry->id)->first();

        if($inv == null) {
            $iDP = new IDP($request->_data_, _POS_::items, $this->crud->entry->id);
            $iDP->saveAllDetail();
        }

        return $redirect_location;
    }
}
