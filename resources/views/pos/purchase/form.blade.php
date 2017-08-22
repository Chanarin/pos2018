<div class="row">
    <div class="col-md-6">
        <?php
        $field = [   // date_picker
            'name' => 'purchase_number',
            'type' => 'text',
            'label' => 'Purchase Number',
            'oneTime' => 0,
            'value' => isset($crud->entry->purchase_number)?$crud->entry->purchase_number:'',
            // optional:
        ];
        ?>
        @include('vendor.backpack.crud.custom.text2',compact('crud', 'entry', 'field'))
    </div>
    <div class="col-md-6">
        <?php
        $field = [
            'name' => '_date_',
            'type' => 'date_picker',
            'label' => 'Purchase Date',
            'oneTime' => 1,
            'value' => isset($crud->entry->_date_)?$crud->entry->_date_:'',
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'yyyy-mm-dd',
                'language' => 'en'
            ],
        ];
        ?>
        @include('vendor.backpack.crud.custom.date_picker2',compact('crud', 'entry', 'field'))
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?php
        $field = [
            // 1-n relationship
            'label' => "Customer Purchase", // Table column heading
            'type' => "select2_from_ajax",
            'name' => 'customer_id', // the column that contains the ID of that connected entity
            'entity' => 'customerTitle', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => "App\Models\Customer", // foreign key model
            'data_source' => url("admin/api/customer"), // url to controller search function (with /{id} should return model)
            'placeholder' => "Select a customer", // placeholder for the select
            'minimum_input_length' => 0, // minimum characters to type before querying results
            'default' => 2,
            'oneTime' => 1,
            'value' => isset($crud->entry->customer_id)?$crud->entry->customer_id:'',
        ];
        ?>
        @include('vendor.backpack.crud.custom.select2_from_ajax2',compact('crud', 'entry', 'field'))
    </div>
    <div class="col-md-6">
        <?php
        $field = [
            'name' => 'ref',
            'type' => 'text',
            'label' => 'Purchase Reference',
            'default' => 888,
            'oneTime' => 0,
            'value' => isset($crud->entry->ref)?$crud->entry->ref:'',
        ];
        ?>
        @include('vendor.backpack.crud.custom.text2',compact('crud', 'entry', 'field'))
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Enter ..." > {{isset($crud->entry->description)?$crud->entry->description:''}} </textarea>
    </div>
</div>