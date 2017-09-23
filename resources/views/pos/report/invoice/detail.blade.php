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
    <h3 align="center" style="margin-top: -50px;">INVOICE DETAIL REPORT</h3>
    @if($report_option == 'between')

        <h4 align="center" style=" margin-top: 0px; ">Form Date
            <b>{{\Carbon\Carbon::parse($from_date)->format('d/m/Y') }}</b> To Date
            <b> {{\Carbon\Carbon::parse($to_date)->format('d/m/Y') }}</b></h4>
    @else
        <h4 align="center" style=" margin-top: 0px; ">Date <b>{{\Carbon\Carbon::parse($to_date)->format('d/m/Y') }}</b>
        </h4>
    @endif
    <h5 style="margin-top: -30px; padding-left: 15px;">Tel : 012 669 175 /012 864 213</h5>
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
                                Customer Name: {{$row->customer->name}}<br>
                                Status: {{$row->status}}<br>
                                Note: {{$row->payment_note}}
                            </td>
                            <td width="33%" valign="top">
                                Invoice Number: {{$row->invoice_number}}<br>
                                Payment Due: {{\Carbon\Carbon::parse($row->_date_)->format('d/m/Y') }}<br>
                                Exchange Rate: {{$row->exchange_rate}} ៛<br>
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
                    <th class="text-center">ល.រ</th>
                    <th class="text-center">កូដ</th>
                    <th class="text-center">ទំនិញ</th>
                    <th class="text-center">ឯកតា</th>
                    <th class="text-center">ចំនួន</th>
                    <th class="text-center">តំលៃ</th>
                    <th class="text-center">សរុប</th>

                </tr>
                </thead>
                <tbody class="border">
                {{--->join('items','items.id','=','invoice_detail.item_id')--}}
                    @php
                        $rowds = \App\Models\InvoiceDetail::where('ref_id',$row->id)
                            ->get();
                        //dd($rowds);
                    @endphp
                    @foreach($rowds as $rd)
                        @php
                            $rds = \App\Models\ItemDetail::where('ref_id',$rd->item_id)->get();
                            $oe = $loop->index;
                        @endphp
                        <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                            <td class="text-left">{{$loop->index+1}}</td>
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
                    <td colspan="4"></td>
                    <td style="text-align:right;">សរុប</td>
                    <td style="text-align:right;">$ {{number_format($row->total_amt,2)}}</td>
                    <td style="text-align:right;">{{number_format(($row->total_amt)*$row->exchange_rate,2)}} ៛</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td style="text-align:right;">បញ្ចុះតំលៃ</td>
                    <td style="text-align:right;">$ {{number_format($row->total_discount,2)}}</td>
                    <td style="text-align:right;">{{number_format(($row->total_discount)*$row->exchange_rate,2)}} ៛</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td style="text-align:right;">សរុបចុងក្រោយ</td>
                    <td style="text-align:right;">$ {{number_format($row->total_payable,2)}}</td>
                    <td style="text-align:right;">{{number_format(($row->total_payable)*$row->exchange_rate,2)}} ៛</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td style="text-align:right;">លុយបង់</td>
                    <td style="text-align:right;">$ {{number_format($row->paid+($row->paid_kh/$row->exchange_rate),2)}}</td>
                    <td style="text-align:right;">{{number_format(($row->paid+($row->paid_kh/$row->exchange_rate))*$row->exchange_rate,2)}} ​​៛</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td style="text-align:right;">លុយអាប់</td>
                    <td style="text-align:right;">$ {{number_format(($row->paid+($row->paid_kh/$row->exchange_rate))-$row->total_payable,2)}}</td>
                    <td style="text-align:right;">{{number_format((($row->paid+($row->paid_kh/$row->exchange_rate))-$row->total_payable)*$row->exchange_rate,2)}}​ ៛</td>
                </tr>
                <tr>
                    <td colspan="7">
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
    <h2 align="center">Not Record Found</h2>

@endif

