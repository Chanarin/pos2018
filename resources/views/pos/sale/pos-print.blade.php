<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report</title>
    <style>
        th,td {
            padding: 5px;
        }
    </style>
</head>
<body>
@if(isset($id))
    @if($id>0)
        @php $row = \App\Models\Invoice::join('customers','customers.id','=','invoice.customer_id')
                        ->where('invoice.id',$id)->first(); @endphp
        @if($row != null)
            <table width="100%">
                <tr>
                    <td>
                        <table style="width: 100%; margin-bottom: 10px; margin-top: 10px;">
                            <tbody style="font-size: 14px;">
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;">
                                    <span><b>Invoice Number</b></span>
                                    : {{$row->invoice_number}}
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>Invoice Date</b></span> :
                                    {{$row->_date_}}
                                </td>
                            </tr>

                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Customer Name</b></span>
                                    : {{$row->name}}
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>Deposit</b></span>
                                    : {{$row->deposit}}
                                </td>
                            </tr>

                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Complete Date</b></span>
                                    : {{$row->complete_date}}
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>Complete Price</b></span> :
                                    $ {{number_format($row->complete_price,2)}}
                                </td>
                            </tr>
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;">
                                    <span><b>Status</b></span> : PENDING
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>Description</b></span> :
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
                            <tr style="font-size:14px;height: 30px;">
                                <th>No</th>
                                <th>Code</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Unit</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Amount</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 12px;">
                            @php
                                $rowds = \App\Models\InvoiceDetail::where('ref_id',$id)
                                    ->join('items','items.id','=','invoice_detail.item_id')
                                    ->get();

                                //dd($rowds);
                            @endphp
                            @foreach($rowds as $rd)
                            <tr class="item" style="height: 30px;">
                                <td class="text-left">{{$loop->index+1}}</td>
                                <td class="text-left">{{$rd->item_code}}</td>
                                <td class="text-left">{{$rd->title}}</td>
                                <td class="text-left">{{$rd->unit}}</td>
                                <td class="text-right">{{$rd->qty}}</td>
                                <td class="text-right">$ {{number_format($rd->price,2)}}</td>
                                <td class="text-right">$ {{number_format($rd->price*$rd->qty,2)}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%; margin-top: 5px;">
                            <tbody>
                            <tr>
                                <td style="text-align:left;">សរុប</td>
                                <td style="text-align:right;">Sub Total (USD) :</td>
                                <td style="text-align:right;">$ 308,911</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;">បញ្ចុះតំលៃ</td>
                                <td style="text-align:right;width:35%;">Discount (USD) :</td>
                                <td style="text-align:right;">$ 0</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;">សរុបចុងក្រោយ</td>
                                <td style="text-align:right;width:40%;">Grand Total (USD) :</td>
                                <td style="text-align:right;">$ 308,911</td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        @endif
    @endif
@endif
</body>
</html>