<div class="row">
    <div class="form-group col-md-6">
        @php
            $field = [
                'name' => 'name',
                'value' => isset($crud->entry->name)?$crud->entry->name:null,
                'label' => _t('Name'),
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
    <div class="form-group col-md-12">
        @php
            $field = [
                'name' => 'note',
                'value' => isset($crud->entry->note)?$crud->entry->note:null,
                'label' => _t('Note'),
                'type' => 'textarea'
                ];
        @endphp
        @include('vendor.backpack.crud.fields.textarea', compact('crud', 'entry', 'field'))
    </div>
</div>