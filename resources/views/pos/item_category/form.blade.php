<div class="row">
    <div class="form-group col-md-6">
        @php
            $field = [
                'label' => 'Parent',
                'type' => 'select',
                'name' => 'parent_id',
                'value' => isset($crud->entry->parent_id)?$crud->entry->parent_id:null,
                'entity' => 'children',
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
                'name' => 'title',
                'value' => isset($crud->entry->title)?$crud->entry->title:null,
                'label' => 'Title',
                'type' => 'text'
                ];
        @endphp
        @include('vendor.backpack.crud.fields.text', compact('crud', 'entry', 'field'))
    </div>

    <div class="form-group col-md-12">
        @php
            $field = [
                'name' => 'description',
                'value' => isset($crud->entry->description)?$crud->entry->description:null,
                'label' => 'Description',
                'type' => 'textarea'
                ];
        @endphp
        @include('vendor.backpack.crud.fields.textarea', compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-12">
        @php
            $field = [ // image
                'default' => asset('No_Image_Available.jpg'),
                'label' => "Image",
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
                   'name' => 'status',
                   'value' => isset($crud->entry->status)?$crud->entry->status:null,
                   'label' => 'Status',
                   'type' => 'enum'
                   ];
        @endphp
        @include('vendor.backpack.crud.custom.enum', compact('crud', 'entry', 'field'))
    </div>

</div>