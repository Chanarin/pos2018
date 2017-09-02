@php
    $c_id = isset($crud->entry->id)?$crud->entry->id:0;
    $m_detail = \App\Models\ChecklistDetail::join('items','checklist_detail.item_id','=','items.id')
                ->where('checklist_detail.ref_id',$c_id)->get();

@endphp
<div class="row" >
    <div class="col-md-12">
        <div class=" pull-right text-right">
            <button class="btn btn-xs btn-default no-print pull-left" onclick="printContent('print-checklist')">
                <i class="fa fa-print"></i>&nbsp;PRINT
            </button>
        </div>
    </div>
</div>
<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>
<div class="row" id="print-checklist">
    <div class="form-group col-lg-6 col-md-6 col-sm-6">
        @php
        $field = [   // date_picker
            'name' => 'checklist_number',
            'type' => 'text',
            'label' => _t('Checklist Number'),
            'value' => isset($crud->entry->checklist_number)?$crud->entry->checklist_number:null,
            // optional:
        ];
        @endphp
        @include('vendor.backpack.crud.custom.text2',compact('crud', 'entry', 'field'))
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-6">
        @php
        $field = [
            'name' => '_date_',
            'type' => 'date_picker',
            'label' => _t('Checklist Date'),
            'showOneTime' => 1,
            'value' => isset($crud->entry->_date_)?$crud->entry->_date_:null,
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'yyyy-mm-dd',
                'language' => 'en'
            ],
        ];
        @endphp
        @include('vendor.backpack.crud.custom.date_picker2',compact('crud', 'entry', 'field'))
    </div>

    <div class="col-md-12">
        <div class="box">
            <div class="box-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 10px">#</th>
                            <th class="text-center" style="width: 70px;">Image</th>
                            <th class="text-center" style="width: 80px !important;">Code</th>
                            <th class="text-center">Name</th>
                            <th class="text-center" style="width: 80px !important;">Unit</th>
                            <th class="text-center"  style="width: 80px !important;">Qty</th>
                            <th class="text-center" style="width: 80px !important;">Num.Qty</th>
                            <th class="text-center" style="width: 80px !important;">Count</th>
                            <th class="text-center" style="width: 150px !important;">Note</th>
                            <th class="text-center" style="width: 10px">Tick</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $key = 1;
                            if(count($m_detail)>0){
                                $checklists = $m_detail;
                            }else{
                                $checklists = \App\Models\Item::get();
                            }

                        @endphp
                        @foreach($checklists as $row)
                            @php
                                $r_id = rand(11111, 99999) .  time() . rand(1000, 5000);
                            @endphp
                            @php
                                if(count($m_detail)>0){
                                    $transaction = $row->qty;
                                }else{
                                    $transaction = \App\Models\ItemTransaction::where('item_id','=',$row->id)->sum('qty');
                                }
                            @endphp
                            <tr>
                                <td class="text-left">{{$key++}}.</td>
                                <td class="text-center">
                                    @php
                                        $img = json_decode($row->image);

                                    @endphp
                                    @if(count($img)>0)
                                        <img src="{{url('img/cache/original/'.\App\Helpers\Glb::get_basename($img[0]))}}" width="50" height="50">
                                    @endif
                                </td>
                                <td class="text-left">{{$row->item_code}}</td>
                                <td class="text-left">{{$row->title}} </td>
                                <td class="text-left">{{$row->unit}}</td>
                                <td class="text-right">{{$transaction}}</td>
                                <td class="text-center">
                                    <input name="_data_[{{$r_id}}][item_id]" value="{{ $row->id }}"  type="hidden">
                                    <input name="_data_[{{$r_id}}][item_code]" value="{{ $row->item_code }}"  type="hidden">
                                    <input name="_data_[{{$r_id}}][title]" value="{{ $row->title }}"  type="hidden">
                                    <input name="_data_[{{$r_id}}][unit]" value="{{ $row->unit }}"  type="hidden">
                                    <input name="_data_[{{$r_id}}][qty]" value="{{$transaction}}"  type="hidden">
                                    <input name="_data_[{{$r_id}}][cost]" value="0"  type="hidden">
                                    <input name="_data_[{{$r_id}}][price]" value="0"  type="hidden">
                                    <input name="_data_[{{$r_id}}][discount]" value="0"  type="hidden">

                                    <input name="_data_[{{$r_id}}][num_qty]" value="{{isset($row->num_qty)?$row->num_qty:''}}" type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input name="_data_[{{$r_id}}][count_qty]" value="{{isset($row->count_qty)?$row->count_qty:''}}"  type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input name="_data_[{{$r_id}}][note]" value="{{isset($row->note)?$row->note:''}}"  type="text"  class="form-control">
                                </td>
                                <td class="text-center"><input type="checkbox"></td>
                            </tr>
                        @endforeach
                        </tbody>




                    </table>
            </div>
        </div>
    </div>
</div>


