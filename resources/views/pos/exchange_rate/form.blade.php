<div class="row">
    <div class="form-group col-md-6">
        @php
            $field = [
                'name' => 'en',
                'value' => isset($crud->entry->en)?$crud->entry->en:null,
                'label' => _t('Dollar'),
                 'attributes' => [
                'readonly' => 'readonly',
            ],
        ];
        @endphp
        @include('vendor.backpack.crud.fields.text', compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-md-6">
        @php
            $field = [
                'name' => 'kh',
                'value' => isset($crud->entry->kh)?$crud->entry->kh:null,
                'label' => _t('Riel'),
                 'attributes' => ["number" => "number"],
                'type' => 'text'
                ];
        @endphp
        @include('vendor.backpack.crud.fields.text', compact('crud', 'entry', 'field'))
    </div>
</div>