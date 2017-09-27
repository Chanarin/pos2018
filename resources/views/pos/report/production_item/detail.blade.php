<style>
    table{
        border-collapse: collapse;
    }
    .border th, .border td {
        border: 1px solid rgba(188, 188, 188, 0.96);
        padding: 5px;
    }
</style>
<div style="margin-bottom: 30px;">
    <img src="{{asset('/pos/img/logo.jpg')}}" height="60" style="margin-bottom: 20px; margin-top: 20px;">
    <h3 align="center" style="margin-top: -50px;">{{_t('PRODUCTION DETAIL REPORT')}}</h3>
    @if($report_option == 'between')

        <h4 align="center" style=" margin-top: 0px; ">{{_t('Form Date')}}
            <b>{{\Carbon\Carbon::parse($from_date)->format('d/m/Y') }}</b> {{_t('To Date')}}
            <b> {{\Carbon\Carbon::parse($to_date)->format('d/m/Y') }}</b></h4>
    @else
        <h4 align="center" style=" margin-top: 0px; ">{{_t('Date')}} <b>{{\Carbon\Carbon::parse($to_date)->format('d/m/Y') }}</b>
        </h4>
    @endif
    <h5 style="margin-top: -30px; padding-left: 15px;">{{_t('Tel')}} : 012 669 175 /012 864 213</h5>
    <h5 style="margin-top: -5px; padding-left: 37px;"> : 016 669 175 /010 864 213 /010 979 960</h5>
</div>
@if(count($rows) > 0)
    <table class="" style="width: 100%">


        @foreach($rows as $row)
            <tr style="">
                <td colspan="6">
                    <table width="100%">
                        <tr>
                            <td width="33%" valign="top">
                                {{_t('Production Number')}}: {{$row->production_number}}<br>
                                Customer: {{$row->customer->name }}<br>
                            </td>
                            <td width="34%" valign="top">
                                {{_t('Production Due')}}: {{\Carbon\Carbon::parse($row->_date_)->format('d/m/Y') }}<br>
                            </td>
                            <td width="33%" valign="top">
                                {{_t('Description')}}: {{$row->description}}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <br>
                </td>
            </tr>
            {{--  -------------------------------------------------------------------------------------}}
            <table width="100%">
                <thead class="border" style="background: #CCCCCC">
                <tr>
                    <th class="text-center">{{_t('No')}}</th>
                    <th class="text-center">{{_t('Code')}}</th>
                    <th class="text-center">{{_t('Name')}}</th>
                    <th class="text-center">{{_t('Unit')}}</th>
                    <th class="text-center">{{_t('Qty')}}</th>
                    <th class="text-center">{{_t('Cost')}}</th>
                    <th class="text-center">{{_t('Total')}}</th>

                </tr>
                </thead>
                <tbody class="border">
                @php
                    $rowss = \App\Models\ProductionDetail::where('ref_id',$row->id)->get();
                @endphp
                @foreach($rowss as $rd)
                    @php
                        $oe = $loop->index;
                    @endphp
                    <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif color: #0586ff; font-weight: bold;">
                        <td class="text-left">{{$loop->index+1}}</td>
                        <td class="text-left">{{$rd->item_code}}</td>
                        <td class="text-left">{{$rd->title}}</td>
                        <td class="text-left">{{$rd->unit}}</td>
                        <td class="text-right">{{$rd->qty}}</td>
                        <td class="text-right">$ {{number_format($rd->cost,2)}}</td>
                        <td class="text-right">$ {{number_format($rd->cost*$rd->qty,2)}}</td>
                    </tr>
                    @if(count($rd->item_detail)>0)
                        @foreach(json_decode($rd->item_detail) as $r)
                            @php
                                $unit = \App\Models\Unit::where('id',$r->unit)->first();
                            @endphp
                            <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                                <td class="text-left"></td>
                                <td class="text-left">{{$r->item_code}}</td>
                                <td class="text-left">{{$r->title}}</td>
                                <td class="text-left">{{$r->unit}} {{isset($unit->name)?$unit->name:''}}</td>
                                <td class="text-right">{{$r->qty}}</td>
                                <td class="text-right">$ {{number_format($r->cost,2)}}</td>
                                <td class="text-right">$ {{number_format($r->cost*$r->qty,2)}}</td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
                </tbody>
                <tr>
                    <td colspan="7">
                        <br>
                        <hr>
                        <br>
                    </td>

                </tr>
                @endforeach
            </table>
    </table>
    <div class="my-paginate" align="center">
        {!! $rows->links() !!}
    </div>
@else
    <h2 align="center">{{_t('Not Record Found')}}</h2>

@endif

