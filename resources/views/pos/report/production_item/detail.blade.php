<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px; margin-top: 10px;">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 " style="text-align: center;">
        <img src="{{asset('/pos/img/logo.jpg')}}" width="90" height="90" alt="">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: center;">
        <span style="font-size: 24px;"><b>POS SHOP REPORT</b></span><br>
        <span style="font-size: 18px;"><b>PRODUCTION ITEM DETAIL</b></span>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

    </div>
</div>
@foreach($rows as $row)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div>
            <table style="width: 100%; margin-bottom: 10px; margin-top: 10px;">
                <tbody style="font-size: 14px;">
                <tr style="text-align:center;">
                    <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Production Number</b></span> : {{$row->production_number}}</td>
                    <td style="vertical-align:middle;text-align:left;"><span><b>Production Date</b></span> : {{$row->_date_}}</td>
                </tr>
                <tr style="text-align:center;">
                    <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Customer Name</b></span> : {{$row->customer_id}}</td>
                    <td style="vertical-align:middle;text-align:left;"><span><b>Reference</b></span> : {{$row->ref}}</td>
                </tr>
                <tr style="text-align:center;">
                    <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Description</b></span> : {{$row->description}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <style>
            .no_border_btm tr td{
                border:none !important;
            }
        </style>
        <table class="table-condensed receipt no_border_btm" style="width:100%;">
            <thead>
            <tr style="border:1px dotted black !important; font-size:14px;">
                <th>No</th>
                <th>Code</th>
                <th>Image</th>
                <th class="text-center">Title</th>
                <th style="text-align:center;">Unit</th>
                <th style="text-align:center;">Qty</th>
                <th style="text-align:right;">Price</th>
                <th style="padding-left:10px;padding-right:10px;text-align:right;">Amount </th>
            </tr>
            </thead>
            <tbody style="border-bottom:2px solid black; font-size: 12px;">

            <tr class="item">
                <td class="text-left">1</td>
                <td class="text-left">P001</td>
                <td class="text-left"><img src="{{asset('/pos/img/item1.jpg')}}" width="60" height="50" alt=""></td>
                <td class="text-center">Title</td>
                <td class="text-center">ជី</td>
                <td class="text-center">1</td>
                <td class="text-center"  style="text-align:right; width:65px !important">$ 460.00</td><td class="text-right">$ 460.00</td>
            </tr>

            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
@endforeach