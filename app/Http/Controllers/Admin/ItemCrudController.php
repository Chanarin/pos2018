<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\_POS_;
use App\Helpers\IDP;
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
        $this->crud->setEntityNameStrings('Item', 'Items');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumn([
            'label' => 'Category',
            'type' => 'select',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'title',
            'model' => "App\Models\ItemCategory",
        ]);

        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Title',
        ]);

        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'image',
            'type' => 'image2m',
            'attributes' => [
                'als' =>'Image',
                'class' =>'',
                'style' =>'width: 60px; height: 40px',
            ],
            'link' => true,
        ]);

        //=============================
        //=============================
        $this->crud->addField([    // WYSIWYG
            'name' => 'item_form',
            'type' => 'view',
            'view' => 'pos.item.form'
        ]);

        $this->crud->enableAjaxTable();

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


        return $redirect_location;
    }
}
