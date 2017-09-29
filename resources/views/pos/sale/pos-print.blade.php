<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{_t('Invoice Print')}}</title>
    <style>
        th,td {
            padding: 5px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Hanuman|Moul" rel="stylesheet">
</head>
<body>
<table width="100%">
    <tr>
        <td>
            <img src="{{url('pos/img/logo.jpg')}}" width="200" height="90" alt="">
        </td>
        <td width="100%" style="text-align: right ">
            <b>(លក់គ្រឿងអលង្ការ)</b><br>
            <span style="font-size: 9px;">
                  ផ្ទះលេខ 80Eo ផ្លូវ19​ កែងផ្លូវ154 សង្កាត់ផ្សារកណ្តាលទី២<br>
            ខ័ណ្ឌដូនពេញ (ទល់មុខសង្កាត់ជ័យជំនះ) រាជធានីភ្នំពេញ<br>
            No.80Eo, St 19 Corner St. 154,Sangkat Phsar Kandal II,<br>
            Khan Daun Penh, Phnom Penh<br>
            Tel: (012) 669 175/ (012) 864 213<br>
            (016) 669 175/ (010) 8640213/ (010) 979 960
            </span>

        </td>
    </tr>
</table>
@if(isset($id))
    @if($id>0)
        @php $row = \App\Models\Invoice::join('customers','customers.id','=','invoice.customer_id')
                        ->where('invoice.id',$id)->first(); @endphp
        @if($row != null)
            <table width="100%" style="font-family: 'Hanuman', serif;">
                <tr>
                    <td>
                        <table style="width: 100%;">
                            <tbody style="font-size: 12px;">
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;">
                                    <span><b>{{_t('Invoice No')}}</b></span>
                                    : {{$row->invoice_number}}
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>{{_t('Invoice Due')}}</b></span> :
                                    {{$row->_date_}}
                                </td>
                            </tr>
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>{{_t('Customer Name')}}</b></span>
                                    : {{$row->name}}
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>{{_t('Exchange Rate')}}</b></span>
                                    : $1 = {{$row->exchange_rate}} ៛
                                </td>
                            </tr>
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left;padding-left:10px;"><span><b>{{_t('Note')}}</b></span> :
                                    {{$row->payment_note}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="1" class="table-condensed receipt no_border_btm" style="width:100%;border-collapse: collapse;">
                            <thead>
                            <tr style="font-size:12px;height: 30px;">
                                <th class="text-center">{{_t('No')}}</th>
                                <th class="text-center" style="width: 62px;">{{_t('Image')}}</th>
                                <th class="text-center">{{_t('Code')}}</th>
                                <th class="text-center">{{_t('Name')}}</th>
                                <th class="text-center">{{_t('Unit')}}</th>
                                <th class="text-center">{{_t('Qty')}}</th>
                                <th class="text-center">{{_t('Price')}}</th>
                                <th class="text-center">{{_t('Total')}}</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 10px; border-bottom: none;">
                            {{--->join('items','items.id','=','invoice_detail.item_id')--}}
                            @php
                                $rowds = \App\Models\InvoiceDetail::where('ref_id',$id)
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
                            <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif  color: #0586ff;">
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
                                            <td class="text-right">{{$r->qty*$rd->qty}}</td>
                                            <td class="text-right">$ {{number_format($r->price,2)}}</td>
                                            <td class="text-right">$ {{number_format($r->price*$r->qty*$rd->qty,2)}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%; margin-top: 5px;  color: #0586ff; font-size:12px;">
                            <tbody>
                                <tr>
                                    <td width="30%"></td>
                                    <td style="text-align:right;">{{_t('Total')}}</td>
                                    <td style="text-align:right;">$ {{number_format($row->total_amt,2)}}</td>
                                    <td style="text-align:right;">{{number_format(($row->total_amt)*$row->exchange_rate,2)}} ៛</td>
                                </tr>
                                <tr>
                                    <td width="30%"></td>
                                    <td style="text-align:right;">{{_t('Total Discount')}}</td>
                                    <td style="text-align:right;">$ {{number_format($row->total_discount,2)}}</td>
                                    <td style="text-align:right;">{{number_format(($row->total_discount)*$row->exchange_rate,2)}} ៛</td>
                                </tr>
                                <tr>
                                    <td width="30%"></td>
                                    <td style="text-align:right;">{{_t('Grand Total')}}</td>
                                    <td style="text-align:right;">$ {{number_format($row->total_payable,2)}}</td>
                                    <td style="text-align:right;">{{number_format(($row->total_payable)*$row->exchange_rate,2)}} ៛</td>
                                </tr>
                                <tr>
                                    <td width="30%"></td>
                                    <td style="text-align:right;">{{_t('Total Paid')}}</td>
                                    <td style="text-align:right;">$ {{number_format($row->paid+($row->paid_kh/$row->exchange_rate),2)}}</td>
                                    <td style="text-align:right;">{{number_format(($row->paid+($row->paid_kh/$row->exchange_rate))*$row->exchange_rate,2)}} ​​៛</td>
                                </tr>
                                <tr>
                                    <td width="30%"></td>
                                    <td style="text-align:right;">{{_t('Remaining')}}</td>
                                    <td style="text-align:right;">$ {{number_format(($row->paid+($row->paid_kh/$row->exchange_rate))-$row->total_payable,2)}}</td>
                                    <td style="text-align:right;">{{number_format((($row->paid+($row->paid_kh/$row->exchange_rate))-$row->total_payable)*$row->exchange_rate,2)}}​ ៛</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <br>
            <table width="100%"​​>
                <tr style="text-align:center; font-size:12px;">
                    <td style="vertical-align:top;text-align:center; width: 50%">
                        <p>......................................</p>
                        <p>{{_t('Buyer')}}</p>
                    </td>
                    <td style="vertical-align:top;text-align:center; width: 50%">
                        <p>......................................</p>
                        <p>{{_t('Seller')}}</p>
                    </td>
                </tr>
            </table>
        @endif
    @endif
@endif
<script>

    {{--window.print();--}}
    {{--window.setTimeout('window.location.href = "{{url('/admin/sale')}}"',500);--}}

</script>
</body>
</html>