<tbody class="table-origin-body" style="display: none;">
@for($i_loop = 1;$i_loop <= 1 ;$i_loop++)
    @php
        //$x1 = rand(11111, 99999) .  time() . rand(1000, 5000);
    @endphp
    <tr id="uid-xxxx-uid-xxxx" class="array-row" data-id="uid-xxxx-uid-xxxx" style="@if($i_loop > 6) display: none !important; @endif ">
        @php $colspan = 2; @endphp
        @foreach( $field['columns'] as  $k => $prop)
            <td style="@if($prop['show'] == false) display: none !important; @else  @php $colspan++; @endphp  @endif   @if($prop['width'] > 0) width:{{$prop['width']}}px ; @endif ">
                @if($k == 'item_id')
                    <select data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                            xx_name_xx="_data_[xxxx-uid-xxxx][{{$k}}]" data-url="{{ url('/api/item') }}" data-multiple="false"
                            data-placeholder="" style="width: 100%; "
                            class="form-control input-sm {{$k}}{{$r_id}} {{$k}} {{$k}}-main item_id-main-id">
                        <option value=""></option>
                        vvvv-{{$k}}-vvvv
                    </select>
                @else
                    <input  data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"   vvvv-{{$k}}-vvvv
                            xx_name_xx="_data_[xxxx-uid-xxxx][{{$k}}]" style="width: 100%; "
                           class="form-control input-sm {{$k}}{{$r_id}}  {{$k}} {{$k}}-main" type="text">
                @endif
            </td>
        @endforeach
        <td style="width: 100px !important;">
            <button data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                    class="btn btn-sm btn-info show-big-item{{$r_id}}" type="button" data-toggle="modal"
                    data-target="#show-item-big"><span class="sr-only">Show Sub</span><i class="fa fa-plus-circle"
                                                                                         role="presentation"
                                                                                         aria-hidden="true"></i>
            </button>
            <button data-show="1" data-add5="1" data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                    class="btn btn-sm btn-success show-sub{{$r_id}} main-add-sub-item" type="button">
                <span class="sr-only">Show Sub</span><i class="fa fa-arrow-down" role="presentation" aria-hidden="true"></i></button>
        </td>
        <td style="width: 10px !important;">
            <button data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                    class="btn btn-sm btn-danger del{{$r_id}} delete-row-main-item" type="button"><span class="sr-only">Delete</span><i
                        class="fa fa-trash" role="presentation" aria-hidden="true"></i></button>
        </td>
    </tr>
    {{--=====================================================
    ======== Sub Item ===================================--}}
    <tr id="uid-xxxx-uid-xxxx-sub" style="display: none;" data-id="xxxx-uid-xxxx">
        <td style="padding-left: 10px;" colspan="{{ $colspan }}">
            <table class="table table-responsive" style="border: 1px solid rgba(204,204,204,0.72);">
                <tr>
                    @foreach( $field['columns'] as $k => $prop )
                        @php

                        @endphp
                        <th style="font-weight: 600!important; @if($prop['show'] == false) display: none !important;  @endif    ; @if($prop['width'] > 0) width:{{$prop['width']}}px ; @endif ">
                            {{ $prop['label'] }}
                        </th>
                    @endforeach
                    <th class="text-center" style="width: 10px !important;">
                        <button data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                                class="btn btn-sm btn-success add-sub{{$r_id}} plus-row-sub-item" type="button"><span
                                    class="sr-only">Add</span> +
                        </button>
                    </th>
                </tr>
                <tbody class="table-striped tbody-original-row-sub">
                {{--@for($i_loop_sub = 1; $i_loop_sub <= $field['max_rows_sub']; $i_loop_sub++)--}}
                @for($i_loop_sub = 1; $i_loop_sub <= 1; $i_loop_sub++)
                    @php
                        $x2 = rand(11111, 99999) .  time() . rand(1000, 5000);
                    @endphp
                    <tr class="array-row table-origin-body-tr-sub" style="@if($i_loop_sub > 5) display: none !important; @endif ">
                        @php $colspan = 2; @endphp
                        @foreach( $field['columns'] as  $k => $prop)
                            <td style="@if($prop['show'] == false) display: none !important; @else  @php $colspan++; @endphp  @endif">
                                @if($k == 'item_id')
                                    <select  data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                                             www_name_www="_data_[xxxx-uid-xxxx][detail][yyyy-uid-yyyy][{{$k}}]"
                                            data-url="{{ url('/api/item') }}" data-multiple="false" data-placeholder=""
                                            style="width: 100%; " class="form-control input-sm {{$k}}{{$r_id}}  {{$k}} {{$k}}-sub">
                                        <option value=""></option>
                                        pppp-{{$k}}-pppp
                                    </select>
                                @else
                                    <input  data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"    pppp-{{$k}}-pppp
                                            www_name_www="_data_[xxxx-uid-xxxx][detail][yyyy-uid-yyyy][{{$k}}]"
                                           style="width: 100%; " class="form-control input-sm {{$k}}{{$r_id}}  {{$k}} {{$k}}-sub"
                                           type="text">
                                @endif
                            </td>
                        @endforeach
                        <td style="width: 10px !important;">
                            <button data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                                    class="btn btn-sm btn-danger del{{$r_id}} delete-row-sub-item" type="button"><span class="sr-only">Delete</span>
                                -
                            </button>
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
