@php
    $data_type  = isset($field['data_type'])?$field['data_type']:'';
    $mu = \App\Models\Unit::all();

    $num_qty =  ['name'=>'num_qty','label' => 'Num.QTY','show' => true,'width' => 80];

     $readonly = \App\Helpers\_POS_::invoice == $data_type? ' readonly="readonly" ':'';
@endphp
<tbody class="table-origin-body" style="display: none;">
@php
    $last_item_code = \App\Models\Item::orderBy('id','desc')->first();

@endphp

<div><span style="color: red ; font-weight: bold;">{{_t('Last Item Code')}} :  {{ $last_item_code != null?$last_item_code->item_code:'' }} </span></div>

@for($i_loop = 1;$i_loop <= 1 ;$i_loop++)
    @php
        //$x1 = rand(11111, 99999) .  time() . rand(1000, 5000);
    @endphp
    <tr id="uid-xxxx-uid-xxxx" class="array-row row-tr-main" data-id="uid-xxxx-uid-xxxx"   data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
        style="@if($i_loop > 6) display: none !important; @endif ">
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
                @elseif($k == 'unit')
                    <select data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                            xx_name_xx="_data_[xxxx-uid-xxxx][{{$k}}]" data-url="{{ url('/api/unit') }}" data-multiple="false"
                            data-placeholder="" style="width: 100%; "
                            class="form-control input-sm {{$k}}{{$r_id}} {{$k}} {{$k}}-main unit-main-id">
                        <option value=""></option>
                        @if(count($mu)>0)
                            @foreach($mu as $ru)
                                <option vvvv-{{$k}}-vvvv value="{{$ru->id}}"> {{$ru->name}} &nbsp;&nbsp;&nbsp;&nbsp;</option>
                            @endforeach
                        @endif
                    </select>
                @else
                    <input
                            @if(!($k == 'qty' || $k == 'cost' || $k == 'price' || $k == 'discount')) {!! $readonly !!}  @endif


                            data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"   vvvv-{{$k}}-vvvv
                            xx_name_xx="_data_[xxxx-uid-xxxx][{{$k}}]" style="width: 100%; "
                            class="form-control input-sm {{$k}}{{$r_id}}  {{$k}} {{$k}}-main" type="text">
                @endif
            </td>
            @if($k == 'unit')
                <td>
                    <input  data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx" number="number"   vvvv-{{$num_qty['name']}}-vvvv
                            xx_name_xx="_data_[xxxx-uid-xxxx][{{$num_qty['name']}}]" style="width: 100%; "
                            class="form-control input-sm {{$num_qty['name']}}{{$r_id}}  {{$num_qty['name']}} {{$num_qty['name']}}-main" type="text">
                </td>
            @endif
        @endforeach
        <td  @if(\App\Helpers\_POS_::items != $data_type) style="width: 100px !important;" @else style="width: 10px !important;"  @endif>
            <button data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                    class="btn btn-sm btn-info show-big-item{{$r_id}}" type="button" data-toggle="modal"
                    data-target="#show-item-big"><span class="sr-only">Show Sub</span><i class="fa fa-plus-circle"
                                                                                         role="presentation"
                                                                                         aria-hidden="true"></i>
            </button>
            @if(\App\Helpers\_POS_::items != $data_type)
                <button data-show="1" data-add5="1" data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                        class="btn btn-sm btn-success show-sub{{$r_id}} main-add-sub-item" type="button">
                    <span class="sr-only">Show Sub</span><i class="fa fa-arrow-down" role="presentation" aria-hidden="true"></i></button>
            @endif
        </td>
        <td style="width: 10px !important;">
            <button data-subid="uid-xxxx-uid-xxxx-sub" data-mainid="uid-xxxx-uid-xxxx"
                    class="btn btn-sm btn-danger del{{$r_id}} delete-row-main-item" type="button"><span class="sr-only">Delete</span><i
                        class="fa fa-trash" role="presentation" aria-hidden="true"></i></button>
        </td>
    </tr>

@endfor
</tbody>
