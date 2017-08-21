<!-- select -->

<div @include('crud::inc.field_wrapper_attributes') >

    <label>{!! $field['label'] !!}</label>
    @include('crud::inc.field_translatable_icon')

    <?php $entity_model = $crud->model; ?>
    <select
            name="{{ $field['name'] }}"
            @include('crud::inc.field_attributes')
    >

        @if ($entity_model::isColumnNullable($field['name']))
            <option value="">-</option>
        @endif

        <?php
            $rows = \Backpack\PageManager\app\Models\Page::all();
        ?>

        @if (count($rows)> 0)
            @foreach ($rows as $row)
                <option value="{{ $row->id }}"

                        @if ( ( old($field['name']) && old($field['name']) == $row->id ) || (!old($field['name']) && isset($field['value']) && $row->id==$field['value']))

                        selected
                        @endif
                >{{ $row->title }}</option>
            @endforeach
        @endif
    </select>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif

</div>