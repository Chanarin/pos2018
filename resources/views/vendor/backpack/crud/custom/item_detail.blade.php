
@php
    $r_id = rand(11111, 99999) .  time() . rand(1000, 5000);
@endphp

<div class="array-container form-group">

    <table class="table table-responsive table-bordered table-striped m-b-0">

        <thead>
        <tr>
            @foreach( $field['columns'] as $k => $prop )
                @php

                @endphp
                <th style="font-weight: 600!important; @if($prop['show'] == false) display: none !important;  @endif ; @if($prop['width'] > 0) width:{{$prop['width']}}px ; @endif " >
                    {{ $prop['label'] }}
                </th>
            @endforeach
            <th class="text-center" colspan="2" style="width: 10px !important;">
            {{--    <button class="btn btn-sm btn-success add{{$r_id}}" type="button"><span class="sr-only">Add</span><i class="fa fa-plus" role="presentation" aria-hidden="true"></i></button>
            --}}
            </th>
        </tr>
        </thead>

        <tbody class="table-striped">
            @for($i_loop = 1;$i_loop <= $field['max_rows'] ;$i_loop++)
            <tr class="array-row" data-id="uid{{$r_id}}_{{$i_loop}}" style="@if($i_loop > 6) display: none !important; @endif ">
                @php $colspan = 2; @endphp
                @foreach( $field['columns'] as  $k => $prop)
                    <td  style="@if($prop['show'] == false) display: none !important; @else  @php $colspan++; @endphp  @endif ;  @if($prop['width'] > 0) width:{{$prop['width']}}px ; @endif ">
                        @if($k == 'item_code')
                            <select  data-url="{{ url('/api/item') }}" data-multiple="false"   data-placeholder="" style="width: 100%; " class="form-control input-sm {{$k}}{{$r_id}}" >
                                <option value=""></option>
                            </select>
                        @else
                            <input style="width: 100%; " class="form-control input-sm {{$k}}{{$r_id}}" type="text">
                        @endif
                    </td>
                @endforeach
                <td  style="width: 10px !important;">
                    <button data-show="1" class="btn btn-sm btn-info show-sub{{$r_id}}" type="button"><span class="sr-only">Show Sub</span><i class="fa fa-street-view" role="presentation" aria-hidden="true"></i></button>
                </td>
                <td  style="width: 10px !important;">
                    <button class="btn btn-sm btn-danger del{{$r_id}}" type="button"><span class="sr-only">Delete</span><i class="fa fa-trash" role="presentation" aria-hidden="true"></i></button>
                </td>
            </tr>
            {{--=====================================================
            ======== Sub Item ===================================--}}
            <tr style="display: none;" id="uid{{$r_id}}_{{$i_loop}}">
                <td style="padding-left: 10px;" colspan="{{ $colspan }}">
                    <table class="table table-responsive" style="border: 1px solid rgba(204,204,204,0.72);">
                        <tr>
                            @foreach( $field['columns'] as $k => $prop )
                                @php

                                @endphp
                                <th style="font-weight: 600!important; @if($prop['show'] == false) display: none !important;  @endif    ; @if($prop['width'] > 0) width:{{$prop['width']}}px ; @endif " >
                                    {{ $prop['label'] }}
                                </th>
                            @endforeach
                            <th class="text-center" style="width: 10px !important;">
                                <button class="btn btn-sm btn-success add-sub{{$r_id}}" type="button"><span class="sr-only">Add</span> + </button>
                            </th>
                        </tr>
                        <tbody class="table-striped-sub">
                            @for($i_loop_sub = 1; $i_loop_sub <= $field['max_rows_sub']; $i_loop_sub++)
                            <tr class="array-row"  style="@if($i_loop_sub > 5) display: none !important; @endif ">
                                @php $colspan = 2; @endphp
                                @foreach( $field['columns'] as  $k => $prop)
                                    <td  style="@if($prop['show'] == false) display: none !important; @else  @php $colspan++; @endphp  @endif">
                                        @if($k == 'item_code')
                                            <select  data-url="{{ url('/api/item') }}" data-multiple="false"   data-placeholder="" style="width: 100%; " class="form-control input-sm {{$k}}{{$r_id}}" >
                                                <option value=""></option>
                                            </select>
                                        @else
                                            <input style="width: 100%; " class="form-control input-sm {{$k}}{{$r_id}}" type="text">
                                        @endif
                                    </td>


                                @endforeach
                                <td  style="width: 10px !important;">
                                    <button class="btn btn-sm btn-danger del{{$r_id}}" type="button"><span class="sr-only">Delete</span> - </button>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </td>
            </tr>
            {{--=====================================================
            =====================================================--}}
            @endfor
        </tbody>

    </table>


</div>


<input type="hidden" class="q-item-name">
{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields) || $field['showOneTime'] == 1 )

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
        <!-- include select2 css-->
        <link href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <!-- include select2 js-->
        <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
    @endpush

@endif

<!-- include field specific select2 js-->
@push('crud_fields_scripts')
    <script>

        jQuery(document).ready(function() {
            $('body').delegate('.add{{$r_id}}','click',function () {

            });

            $('body').delegate('.show-sub{{$r_id}}','click',function () {
                var tr = $(this).parent().parent();
                var uid_main = tr.data('id');
                if($(this).data('show') > 0) {
                    $('#' + uid_main).show(1000);
                    $(this).data('show',-1);
                }else {
                    $('#' + uid_main).hide(1000);
                    $(this).data('show',1);
                }
            });

            $('body').delegate('.del{{$r_id}}','click',function () {

            });

            //================================
            //================================
            $('body').delegate('.add-sub{{$r_id}}','click',function () {

            });

            $('body').delegate('.no-result-add-item','click',function () {
                var item_name = $('.q-item-name').val();
            });


            $('.item_code{{$r_id}}').each(function () {
                $(this).one('mouseenter mouseleave',function () {
                    runSelect2{{$r_id}}($(this));
                });
            });

        });

        function runSelect2{{$r_id}}(obj) {
            var placeholder = obj.data('placeholder');
            var url = obj.data('url');
            var multiple = false;
            //alert(category);
            obj.select2({
                theme: 'bootstrap',
                multiple: multiple,
                placeholder: placeholder,
                minimumInputLength: "0",
                ajax: {
                    url: url,
                    dataType: 'json',
                    quietMillis: 250,
                    closeOnSelect: false,
                    success: function (data) {
                        if(data.data.length > 0) {
                            console.log(data.data[0].id);
                        }else {
                            console.log(0);
                        }
                    },
                    data: function (params) {
                        if(params.term) {
                            $('.q-item-name').val(params.term);
                        }
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;

                        return {
                            results: $.map(data.data, function (item) {
                                //console.log(item);
                                return {
                                    text: item.title,
                                    id: item.id
                                }
                            }),
                            more: data.current_page < data.last_page
                        };
                    }
                    //cache: true
                },
                "language": {
                    "noResults": function(){
                        return 'No Results Found <button class="btn btn-danger no-result-add-item">Create New</button>';
                    }
                },
                escapeMarkup: function (markup) {
                    return markup;
                },

            }).on('change',function () {
                var id = $(this).val();
                alert(id);
            });

        }

    </script>
@endpush
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
