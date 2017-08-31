<?php
$ref_id = isset($crud->entry->id)?$crud->entry->id:0;
$data_type = isset($field['data_type'])?$field['data_type']:null;
$dataDetails = (new \App\Helpers\IDP([],$data_type,$ref_id))->getAllDetail();
?>
<div class="row">
    <div class="form-group col-md-6">
        @php
        $field = [   // date_picker
            'name' => 'production_number',
            'type' => 'text',
            'label' => _t('Production Number'),
            'value' => isset($crud->entry->production_number)?$crud->entry->production_number:null,
        ];
        @endphp
        @include('vendor.backpack.crud.custom.text2',compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-6">
        @php
        $field = [
            'name' => '_date_',
            'type' => 'date_picker',
            'label' => _t('Production Date'),
            'value' => isset($crud->entry->_date_)?$crud->entry->_date_:null,
            'showOneTime' => 1,
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'yyyy-mm-dd',
                'language' => 'en'
            ],
        ];
        @endphp
        @include('vendor.backpack.crud.custom.date_picker2',compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-6">
        @php
        $field = [
            // 1-n relationship
            'label' => _t('Customer Production'), // Table column heading
            'type' => 'select2_from_ajax',
            'name' => 'customer_id', // the column that contains the ID of that connected entity
            'entity' => 'customer', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => "App\Models\Customer", // foreign key model
            'data_source' => url("admin/api/customer"), // url to controller search function (with /{id} should return model)
            'placeholder' => "Select a customer", // placeholder for the select
            'minimum_input_length' => 0, // minimum characters to type before querying results
            'showOneTime' => 1,
            'value' => isset($crud->entry->customer_id)?$crud->entry->customer_id:null,
        ];
        @endphp
        @include('vendor.backpack.crud.custom.select2_from_ajax2',compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-6">
        @php
        $field = [
            'name' => 'ref',
            'type' => 'text',
            'label' => _t('Production Reference'),
            'value' => isset($crud->entry->ref)?$crud->entry->ref:null,
        ];
        @endphp
        @include('vendor.backpack.crud.custom.text2',compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-12">
        @php
            $field = [
                'name' => 'description',
                'value' => isset($crud->entry->description)?$crud->entry->description:null,
                'label' => _t('Description'),
                'type' => 'textarea'
                ];
        @endphp
        @include('vendor.backpack.crud.fields.textarea', compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-12">
        @php
            $field = [
                'dataDetails' => $dataDetails,
                'data_type' => \App\Helpers\_POS_::production ,
                'max_rows' => 5,
                'max_rows_sub' => 5,
                'level' => 1,
                'label' => _t("Item Detail"),
                'name' => "item_detail",
                'value' => isset($crud->entry->image)?$crud->entry->image:null,
                'type' => 'item_detail',
                'columns' => [
                    'item_id' => ['label' => 'Item ID','show' => true,'width' => 150],
                    'item_code' => ['label' => 'Code','show' => true,'width' => 150],
                    'title' => ['label' => 'Title','show' => true,'width' => 150],
                    'description' => ['label' => 'Description','show' => false,'width' => -1],
                    'unit' => ['label' => 'Unit','show' => true,'width' => -1],
                    'qty' => ['label' => 'Qty','show' => true,'width' => -1],
                    'cost' => ['label' => 'Cost','show' => false,'width' => -1],
                    'price' => ['label' => 'Price','show' => false,'width' => -1],
                    'discount' => ['label' => 'Discount','show' => false,'width' => -1],
                'amount' => ['label' => 'Amount','show' => true,'width' => -1],
                    'note' => ['label' => 'Note','show' => false,'width' => -1],
                ],
                'showOneTime' => 0
                 ];
        @endphp
        @include('vendor.backpack.crud.custom.item_detail', compact('crud', 'entry', 'field'))
    </div>

</div>

