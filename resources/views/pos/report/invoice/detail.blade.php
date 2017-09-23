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
    <h3 align="center" style="margin-top: -50px;">{{_t('INVOICE DETAIL REPORT')}}</h3>
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

                                Huy Sombath Jewelry Shop.<br>
                                No.80Eo, St 19 Corner St. 154,<br>
                                Sangkat Phsar Kandal II,<br>
                                Khan Daun Penh, Phnom Penh<br>
                                Phone: (012) 669 175<br>

                            </td>
                            <td width="34%" valign="top">
                                {{_t('Customer Name')}}: {{$row->customer->name}}<br>
                                {{_t('Status')}}: {{$row->status}}<br>
                                {{_t('Note')}}: {{$row->payment_note}}<br>
                                @if($row->deposit != '')
                                    {{_t('Deposit')}}: $ {{number_format($row->deposit,2)}}<br>
                                    {{_t('Complete Price')}}: $ {{number_format($row->complete_price,2)}}<br>
                                @endif
                            </td>
                            <td width="33%" valign="top">
                                {{_t('Invoice Number')}}: {{$row->invoice_number}}<br>
                                {{_t('Invoice Due')}}: {{\Carbon\Carbon::parse($row->_date_)->format('d/m/Y') }}<br>
                                @if($row->complete_date != '')
                                    {{_t('Complete Date')}}: {{\Carbon\Carbon::parse($row->complete_date)->format('d/m/Y') }}<br>
                                @endif
                                {{_t('Exchange Rate')}}: {{$row->exchange_rate}} ៛<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <br>

                </td>
            </tr>

            {{--  -------------------------------------------------------------------------------------}}
            <table width="100%">
                <thead class="border" style="background: #CCCCCC">
                <tr>
                    <th class="text-center">{{_t('No')}}</th>
                    <th class="text-center">{{_t('Image')}}</th>
                    <th class="text-center">{{_t('Code')}}</th>
                    <th class="text-center">{{_t('Name')}}</th>
                    <th class="text-center">{{_t('Unit')}}</th>
                    <th class="text-center">{{_t('Qty')}}</th>
                    <th class="text-center">{{_t('Price')}}</th>
                    <th class="text-center">{{_t('Total')}}</th>

                </tr>
                </thead>
                <tbody class="border">
                {{--->join('items','items.id','=','invoice_detail.item_id')--}}
                    @php
                          $rowds = \App\Models\InvoiceDetail::where('ref_id',$row->id)
                                ->join('items','items.id','=','invoice_detail.item_id')
                               ->selectRaw("items.id,
                                invoice_detail.item_id,
                                invoice_detail.item_code,
                                invoice_detail.title,
                                invoice_detail.unit,
                                invoice_detail.num_qty,
                                invoice_detail.qty,
                                invoice_detail.cost,
                                invoice_detail.price,
                                invoice_detail.discount,
                                invoice_detail.note,
                                invoice_detail.item_detail,
                                items.image")
                                ->get();
                    @endphp
                    @foreach($rowds as $rd)
                        @php
                            $rds = \App\Models\ItemDetail::where('ref_id',$rd->item_id)->get();
                            $oe = $loop->index;
                        @endphp
                        <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                            <td class="text-left">{{$loop->index+1}}</td>
                            <td class="text-left">
                                @php
                                    $img = json_decode($rd->image);
                                @endphp
                                @if(count($img)>0)
                                    <img src="{{url('img/cache/original/'.\App\Helpers\Glb::get_basename($img[0]))}}" width="60" height="60">
                                @endif
                            </td>
                            <td class="text-left">{{$rd->item_code}}</td>
                            <td class="text-left">{{$rd->title}}</td>
                            <td class="text-left">{{$rd->unit}}</td>
                            <td class="text-right">{{$rd->qty}}</td>
                            <td class="text-right">$ {{number_format($rd->price,2)}}</td>
                            <td class="text-right">$ {{number_format($rd->price*$rd->qty,2)}}</td>
                        </tr>
                        @if(count($rds)>0)
                            @foreach($rds as $r)
                                @php
                                    $unit = \App\Models\Unit::where('id',$r->unit)->first();
                                @endphp
                                <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                                    <td class="text-left"></td>
                                    <td class="text-left"></td>
                                    <td class="text-left">{{$r->item_code}}</td>
                                    <td class="text-left">{{$r->title}}</td>
                                    <td class="text-left">{{$r->unit}} {{isset($unit->name)?$unit->name:''}}</td>
                                    <td class="text-right">{{$r->qty}}</td>
                                    <td class="text-right">$ {{number_format($r->price,2)}}</td>
                                    <td class="text-right">$ {{number_format($r->price*$r->qty,2)}}</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach

                </tbody>
                <tr>
                    <td colspan="5"></td>
                    <td style="text-align:right;">{{_t('Grand Total')}}</td>
                    <td style="text-align:right;">$ {{number_format($row->total_amt,2)}}</td>
                    <td style="text-align:right;">{{number_format(($row->total_amt)*$row->exchange_rate,2)}} ៛</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td style="text-align:right;">{{_t('Discount')}}</td>
                    <td style="text-align:right;">$ {{number_format($row->total_discount,2)}}</td>
                    <td style="text-align:right;">{{number_format(($row->total_discount)*$row->exchange_rate,2)}} ៛</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td style="text-align:right;">{{_t('Total Payable')}}</td>
                    <td style="text-align:right;">$ {{number_format($row->total_payable,2)}}</td>
                    <td style="text-align:right;">{{number_format(($row->total_payable)*$row->exchange_rate,2)}} ៛</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td style="text-align:right;">{{_t('Paid')}}</td>
                    <td style="text-align:right;">$ {{number_format($row->paid+($row->paid_kh/$row->exchange_rate),2)}}</td>
                    <td style="text-align:right;">{{number_format(($row->paid+($row->paid_kh/$row->exchange_rate))*$row->exchange_rate,2)}} ​​៛</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td style="text-align:right;">{{_t('Remaining')}}</td>
                    <td style="text-align:right;">$ {{number_format(($row->paid+($row->paid_kh/$row->exchange_rate))-$row->total_payable,2)}}</td>
                    <td style="text-align:right;">{{number_format((($row->paid+($row->paid_kh/$row->exchange_rate))-$row->total_payable)*$row->exchange_rate,2)}}​ ៛</td>
                </tr>
                <tr>
                    <td colspan="8">
                        <br>
                        <hr>
                        <br>
                    </td>
                </tr>
            </table>
        @endforeach
    </table>
    <div class="my-paginate" align="center">
        {!! $rows->links() !!}
    </div>
@else
    <h2 align="center">{{_t('Not Record Found')}}</h2>

@endif

