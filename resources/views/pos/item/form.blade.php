<?php
$ref_id = isset($crud->entry->id)?$crud->entry->id:0;
$data_type = isset($field['data_type'])?$field['data_type']:null;
$dataDetails = (new \App\Helpers\IDP([],$data_type,$ref_id))->getAllDetail();
?>
<div class="row">
    <div class="form-group col-md-6">
        @php
        $field = [
            'label' => _t('Category'),
            'type' => 'select',
            'name' => 'category_id',
            'value' => isset($crud->entry->category_id)?$crud->entry->category_id:null,
            'entity' => 'category',
            'attribute' => 'title',
            'model' => "App\Models\ItemCategory",
            'showOneTime' => 1
            ];
        @endphp
        @include('vendor.backpack.crud.custom.select2', compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-6">
        @php
        $field = [
            'name' => 'item_code',
            'value' => isset($crud->entry->item_code)?$crud->entry->item_code:null,
            'label' => _t('Code'),
            'type' => 'text'
            ];
        @endphp
        @include('vendor.backpack.crud.fields.text', compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-6">
        @php
        $field = [
            'name' => 'title',
            'value' => isset($crud->entry->title)?$crud->entry->title:null,
            'label' => _t('Title'),
            'type' => 'text'
            ];
        @endphp
        @include('vendor.backpack.crud.fields.text', compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-6">
        @php
        $field = [
            'name' => 'unit',
            'value' => isset($crud->entry->unit)?$crud->entry->unit:null,
            'label' => _t('Unit'),
            'type' => 'text'
            ];
        @endphp
        @include('vendor.backpack.crud.fields.text', compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-6">
        @php
            $field = [
                'name' => 'price',
                'value' => isset($crud->entry->price)?$crud->entry->price:null,
                'label' => _t('Price'),
               'attributes' => ["number" => "number"],
                'type' => 'text'
                ];
        @endphp
        @include('vendor.backpack.crud.fields.text', compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-6">
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
        $field = [ // image
            'default' => asset('No_Image_Available.jpg'),
            'label' => _t("Image"),
            'name' => "image",
            'value' => isset($crud->entry->image)?$crud->entry->image:null,
            'type' => 'image2m',
            'upload' => true,
            'crop' => true,
            'aspect_ratio' => 5/4,
            'showOneTime' => 1
             ];
        @endphp
        @include('vendor.backpack.crud.custom.image2m', compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-12">
        @php
        $field = [
            'dataDetails' => $dataDetails,
            'data_type' => \App\Helpers\_POS_::items ,
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
                'title' => ['label' => 'Title','show' => true,'width' => 200],
                'description' => ['label' => 'Description','show' => false,'width' => -1],
                'unit' => ['label' => 'Unit','show' => true,'width' => 90],
                'qty' => ['label' => 'Qty','show' => true,'width' => 90],
                'cost' => ['label' => 'Cost','show' => false,'width' => -1],
                'price' => ['label' => 'Price','show' => false,'width' => -1],
                'discount' => ['label' => 'Discount','show' => false,'width' => -1],
                'amount' => ['label' => 'Amount','show' => false,'width' => -1],
                'note' => ['label' => 'Note','show' => true,'width' => -1],
            ],
            'showOneTime' => 1
             ];
        @endphp
        @include('vendor.backpack.crud.custom.item_detail', compact('crud', 'entry', 'field'))
    </div>
</div>