<div class="row" >
    <div class="col-md-12">
        <div class=" pull-right text-right">
            <a href="{{url('/admin/view-checklist')}}" target="_blank" class="btn btn-xs btn-default pull-left">
                <i class="fa fa-print"></i>&nbsp;PRINT
            </a>
        </div>
    </div>
</div>
<div class="row">
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
    <div class="form-group col-md-12">
        <div class="box">
            <div class="box-body">
                <table class="table-responsive"  width="1024px"  border="0" cellspacing="0" style="margin:auto;">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 10px">#</th>
                            <th class="text-center" style="width: 70px;">Image</th>
                            <th class="text-center">Code</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Unit</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center" style="width: 80px !important;">Count</th>
                            <th class="text-center" style="width: 150px !important;">Note</th>
                            <th class="text-center" style="width: 10px">Tick</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $key = 1;
                            $checklists = \App\Models\Item::get();
                        @endphp
                        @foreach($checklists as $row)
                            @php
                                $r_id = rand(11111, 99999) .  time() . rand(1000, 5000);
                                //$dataDetails = isset($field['dataDetails'])?$field['dataDetails']:null;
                               // dd($dataDetails);
                            @endphp
                            @php
                                $transaction = \App\Models\ItemTransaction::where('item_id','=',$row->id)->sum('qty');
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
                                    <input name="_data_[{{$r_id}}][num_qty]" value="0"  type="hidden">
                                    <input name="_data_[{{$r_id}}][qty]" value="{{$transaction}}"  type="hidden">
                                    <input name="_data_[{{$r_id}}][cost]" value="0"  type="hidden">
                                    <input name="_data_[{{$r_id}}][price]" value="0"  type="hidden">
                                    <input name="_data_[{{$r_id}}][discount]" value="0"  type="hidden">
                                    <input name="_data_[{{$r_id}}][note]" value=""  type="hidden">

                                    <input type="text" style="width: 78px !important;">
                                </td>
                                <td class="text-center">
                                    <input type="text" style="width: 148px !important;">
                                </td>
                                <td class="text-center"><input type="checkbox"></td>
                            </tr>
                        @endforeach
                        </tbody>




                    </table>
                </table>
            </div>
        </div>
    </div>

</div>


