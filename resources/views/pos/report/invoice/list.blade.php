@if(count($rows) > 0)
<div id="report-print">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px; margin-top: 10px;">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 " style="text-align: center;">
            <img src="{{asset('/pos/img/logo.jpg')}}" width="90" height="90" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: center;">
            <span style="font-size: 24px;"><b>POS SHOP REPORT</b></span><br>
            <span style="font-size: 18px;"><b>INVOICE LIST</b></span>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table class="table table-bordered" style="width: 100%;">
            <thead>
            <tr style="font-size: 14px;">
                <th class="text-center" style="width: 20px">#</th>
                <th class="text-center">Invoice Number</th>
                <th class="text-center">Invoice Date</th>
                <th class="text-center">Customer Name</th>
                <th class="text-center">Deposit</th>
                <th class="text-center">Complete Date</th>
                <th class="text-center">Complete Price</th>
                <th class="text-center">Discount</th>
                <th class="text-center">Amount</th>
                <th style="width: 20px"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($rows as $row)
                @php
                    $key = 1;
                    $invoice_details = \App\Models\InvoiceDetail::where('ref_id','=',$row->id)->get();
                    $grand_total = 0;
                    $total_discount = 0;
                @endphp
                @foreach($invoice_details as $invoice_detail)

                    @php
                        $item_field = \App\Models\Item::find($invoice_detail->item_id);
                        $amount = (($invoice_detail->qty)*($invoice_detail->price))-($invoice_detail->discount);
                        $grand_total+= $amount;
                        $total_discount+= ($invoice_detail->discount);
                    @endphp
                @endforeach
                <tr style="font-size: 12px;">
                    <td>{{$k++}}.</td>
                    <td>{{$row->invoice_number}}</td>
                    <td>{{$row->_date_}}</td>
                    <td>{{$row->customer->name}}</td>
                    <td>{{$row->deposit}}</td>
                    <td>{{$row->complete_date}}</td>
                    <td>$ {{number_format($row->complete_price)}}</td>
                    <td>$ {{number_format($total_discount)}}</td>
                    <td>$ {{number_format($grand_total)}}</td>
                    <td><button type="button" data-toggle="modal" data-target="#popUpItemDetail{{$row->id}}"><i class="fa fa-eye">
                            </i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@foreach($rows as $row)
    <div class="modal fade" id="popUpItemDetail{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="popUpItemDetail{{$row->id}}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-2x">×</i></span><span class="sr-only">Close</span></button>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h4 class="modal-title" id="mModalLabel">INVOICE DETAIL</h4>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="" onclick="printContent('print-report-detail')">PRINT</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <div class="col-md-12" id="print-report-detail">
                    <div style="font-size:11px;">
                        <table style="width: 100%; margin-bottom: 10px; margin-top: 10px;">
                            <tbody style="font-size: 14px;">
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Invoice Number</b></span> : {{$row->invoice_number}}</td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>Invoice Date</b></span> : {{$row->_date_}}</td>
                            </tr>
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Customer Name</b></span> : {{$row->customer->name}}</td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>Deposit</b></span> : {{$row->deposit}}</td>
                            </tr>
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Complete Date</b></span> : {{$row->complete_date}}</td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>Complete Price</b></span> : $ {{$row->complete_price}}</td>
                            </tr>
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Status</b></span> : {{$row->status}}</td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>Description</b></span> : {{$row->description}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <table class="table-condensed receipt" style="width:100%;">
                        <thead>
                        <tr style="border:1px dotted black !important; font-size:14px;">
                            <th>No</th>
                            <th>Code</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Unit</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Discount</th>
                            <th class="text-center">Amount</th>
                        </tr>
                        </thead>
                        <tbody style="border-bottom:2px solid black; font-size: 12px;">
                        @php
                            $key = 1;
                            $invoice_details = \App\Models\InvoiceDetail::where('ref_id','=',$row->id)->get();
                            $grand_total = 0;
                            $sub_total = 0;
                            $total_discount = 0;
                        @endphp
                        @foreach($invoice_details as $invoice_detail)

                            @php
                                $item_field = \App\Models\Item::find($invoice_detail->item_id);
                                $amount = (($invoice_detail->qty)*($invoice_detail->price))-($invoice_detail->discount);
                                $grand_total+= $amount;
                                $sub_total+= ($invoice_detail->price);
                                $total_discount+= ($invoice_detail->discount);
                            @endphp
                            <tr class="item">
                                <td class="text-left">{{$key++}}</td>
                                <td class="text-left">{{$invoice_detail->item_code}}</td>
                                <td class="text-left">{{$item_field->title}}</td>
                                <td class="text-left">{{$item_field->unit}}</td>
                                <td class="text-right">{{number_format($invoice_detail->qty)}}</td>
                                <td class="text-right">$ {{number_format($invoice_detail->price)}}</td>
                                <td class="text-right">$ {{number_format($invoice_detail->discount)}}</td>
                                <td class="text-right">$ {{number_format($amount)}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <table style="width: 100%; margin-top: 5px;">
                        <tr>
                            <td style="text-align:left;">សរុប</td>
                            <td style="text-align:right;">Sub Total (USD) :</td>
                            <td style="text-align:right;">$ {{number_format($sub_total)}}</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;">បញ្ចុះតំលៃ</td>
                            <td style="text-align:right;width:35%;">Discount (USD) :</td>
                            <td style="text-align:right;">$ {{number_format($total_discount)}}</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;">សរុបចុងក្រោយ</td>
                            <td style="text-align:right;width:40%;">Grand Total (USD) :</td>
                            <td style="text-align:right;">$ {{number_format($grand_total)}}</td>
                        </tr>

                    </table>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 my-paginate" align="center">
    {!! $rows->links() !!}
</div>
@else
    <h2 align="center">Not Record Found</h2>

@endif