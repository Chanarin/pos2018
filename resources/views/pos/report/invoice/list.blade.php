{{--http://127.0.0.1:8000/api/report/open-item/list?from_date=2-8-9&to_date=2-3-4--}}
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
            <th style="width: 20px">#</th>
            <th>Invoice Number</th>
            <th>Invoice Date</th>
            <th>Customer Name</th>
            <th>Deposit</th>
            <th>Complete Date</th>
            <th>Complete Price</th>
            <th>Description</th>
            <th>Status</th>
            <th style="width: 20px"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($rows as $row)
            <tr style="font-size: 12px;">
                <td>{{$k++}}.</td>
                <td>{{$row->invoice_number}}</td>
                <td>{{$row->_date_}}</td>
                <td>{{$row->customer->name}}</td>
                <td>{{$row->deposit}}</td>
                <td>{{$row->complete_date}}</td>
                <td>{{$row->complete_price}}</td>
                <td>{{$row->description}}</td>
                <td>{{$row->status}}</td>
                <td><button type="button" data-toggle="modal" data-target="#popUpItemDetail{{$row->id}}"><i class="fa fa-search">
                        </i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
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
                                <td style="vertical-align:middle;text-align:left;"><span><b>Complete Price</b></span> : {{$row->complete_price}}</td>
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
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $key = 1;
                            $invoice_details = \App\Models\InvoiceDetail::where('ref_id','=',$row->id)->get();
                        @endphp
                        @foreach($invoice_details as $invoice_detail)

                            @php
                                $item_field = \App\Models\Item::find($invoice_detail->item_id);
                            @endphp
                            <tr class="item">
                                <td class="text-left">{{$key++}}</td>
                                <td class="text-left">{{$invoice_detail->item_code}}</td>
                                <td class="text-center">{{$item_field->title}}</td>
                                <td class="text-center">{{$item_field->unit}}</td>
                                <td class="text-center">{{$invoice_detail->qty}}</td>
                                <td class="text-center">$ {{$invoice_detail->price}}</td>
                                <td class="text-center">$ {{$invoice_detail->discount}}</td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
@endforeach