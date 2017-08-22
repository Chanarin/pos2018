<div class="row">
    <div class="col-md-6">
        <?php
        $field = [   // date_picker
            'name' => 'open_number',
            'type' => 'text',
            'label' => 'Open Number',
            'oneTime' => 0,
            'value' => isset($crud->entry->open_number)?$crud->entry->open_number:'',
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

<div class="col-md-12">
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Enter ..." > {{isset($crud->entry->description)?$crud->entry->description:''}} </textarea>
    </div>
</div>

