<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice No 293</title>
    <base href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/"/>
    <meta http-equiv="cache-control" content="max-age=0"/>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="pragma" content="no-cache"/>
    <link rel="stylesheet" href="{{asset('pos/invoice/theme.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css" media="all">
        body {
            color: #000;
            font-size:13px !important;
        }

        #wrapper {
            max-width: 480px;
            margin: 0 auto;
            padding-top: 20px;
        }

        .btn {
            border-radius: 0;
            margin-bottom: 5px;
        }

        h3 {
            margin: 5px 0;
        }
        .text-center {
            text-align:center;
        }

        .item td {
            border-bottom: 1px solid #000;
        }
        .receipt > thead > tr > th {
            font-size: 15px;
            background-color:#fff !important;color:#000 !important;
            -webkit-print-color-adjust: exact;
            -moz-print-color-adjust: exact;
            -ms-print-color-adjust:exact;
            print-color-adjust:exact;
            color-adjust:exact;
            -webkit-color-adjust:exact;
            -moz-color-adjust:exact;
            -ms-color-adjust:exact;
        }

        @media print {
            .no-print {
                display: none;
            }

            #wrapper {
                /*max-width: 480px;*/
                width: 95% !important;
                /*min-width: 250px;*/
                margin: 0 auto !important;
                padding: 0 !important;
                font-size: 10px !important;
            }

            thead tr th {
                font-size: 10px !important;
            }

            tbody {
                font-size: 10px !important;
            }

            img {
                padding-right: 20px !important;
            }

        }
    </style>

</head>

<body>

<div id="wrapper">
    <div id="receiptData">
        <div class="no-print">
        </div>
        <div id="receipt-data">
            <div class="text-center">
                <button class="btn btn-xs btn-default no-print pull-left" onclick="window.print()"><i class="fa fa-print"></i>&nbsp;Print</button>
                <img src="{{asset('/pos/img/logo.jpg')}}" width="70" height="60" alt="IT Group(Phnom Penh)">
                <!--<img style="width:100%;" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/Aylogo/logo501.jpg"> -->
                <!--<h3 style="text-transform:uppercase;">Cloudnet(Phnom Penh)</h3>-->
                <p>#12Eo Phnom Penh 12001 Kondal Cambodia<br>Tel:​​ 098 794 242
                <div style="font-size:11px;">
                    <table style="width: 100%;">
                        <tbody style="font-size: 12px;">
                        <tr style="text-align:center;">
                            <td style="vertical-align:middle;text-align:left;padding:3px;">អត្រាប្ដូរប្រាក់</td>
                            <td style="vertical-align:middle;text-align:left;">$1 = 4200  ៛</td>
                            <td style="vertical-align:middle;text-align:left;">ថ្ងៃ&#8203;ខែឆ្នាំ</td>
                            <td style="vertical-align:middle;text-align:right;">14/08/2017</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td style="vertical-align:middle;text-align:left;padding:3px;">អ្នកលក់</td>
                            <td style="vertical-align:middle;text-align:left;">owner</td>
                            <td style="vertical-align:middle;text-align:left;">លេខវិក័យបត្រ</td>
                            <td style="vertical-align:middle;text-align:right;">SALE/POS/1708/00005</td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <div style="clear:both;"></div>

                <style>
                    .no_border_btm tr td{
                        border:none !important;
                    }
                </style>

                <table class="table-condensed receipt no_border_btm" style="width:100%;">
                    <thead>
                    <tr style="border:1px dotted black !important;">
                        <th>No</th>
                        <th>Description</th>
                        <!--<th style="color:white !important;">Serial</th>-->
                        <th style="text-align:center;">Unit</th>
                        <th style="text-align:center;">Qty</th>
                        <th style="text-align:right;">Price</th>
                        <th style="padding-left:10px;padding-right:10px;text-align:right;">Amount </th>
                    </tr>
                    </thead>
                    <tbody style="border-bottom:2px solid black;">
                    <tr class="item">
                        <td class="text-left">1</td>
                        <td class="text-left"><img src="{{asset('/pos/img/logo.jpg')}}" width="60" height="50" alt="IT Group(Phnom Penh)"> DESTOP Acer</td>
                        <td class="text-center">ជី</td>
                        <td class="text-center">1</td>
                        <td class="text-center"  style="text-align:right; width:65px !important">$ 460.00</td><td class="text-right">$ 460.00</td>
                    <tr class="item">
                        <td class="text-left">2</td>
                        <td class="text-left"><img src="{{asset('/pos/img/logo.jpg')}}" width="60" height="50" alt="IT Group(Phnom Penh)"> iphone 6 black</td>
                        <td class="text-center">ជី</td>
                        <td class="text-center">1</td>
                        <td class="text-center"  style="text-align:right; width:65px !important">$ 300.00</td><td class="text-right">$ 300.00</td>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                <table style="width: 100%; margin-top: 5px;">
                    <tr>
                        <td style="text-align:left;width:25%;">សរុប</td>
                        <td style="text-align:right;width:35%;">Sub Total (USD) :</td>
                        <td style="text-align:right;">$ 760.00</td>
                    </tr>
                    {{--<tr>--}}
                    {{--<td style="text-align:left;">ពន្ធ</td>--}}
                    {{--<td style="text-align:right;width:35%;">Order Tax (USD) :</td>--}}
                    {{--<td style="text-align:right;">$ 0.00</td>--}}
                    {{--</tr>--}}
                    <tr>
                        <td style="text-align:left;">បញ្ចុះតំលៃ</td>
                        <td style="text-align:right;width:35%;">Discount (USD) :</td>
                        <td style="text-align:right;">$ 0.00</td>
                    </tr>
                    <tr>
                        <td style="text-align:left;">សរុបចុងក្រោយ</td>
                        <td style="text-align:right;width:40%;">Grand Total (USD) :</td>
                        <td style="text-align:right;">$
                            760.00
                        </td>
                    </tr>

                </table>
                <table class="received" style="width:100%;margin-top: 5px;">
                    <tr style="display:none;">
                        <th></th>
                        <th style="display:none;">
                            Rate : 4,200					Qty= (2.00)
                        </th>
                        <th  style="display:none;"colspan="3" class="text-right">Total</th>
                        <th  style="display:none;"class="text-right">760.00</th>
                    </tr>

                    <tr>
                        <th style="border-left:2px solid #000;border-top:2px solid #000;border-right:none;padding-right: 12px;width:64%;"  class="text-right">Received (USD) :</th>
                        <th style="border-right:2px solid #000;border-top:2px solid #000;border-left:none;" class="text-right">10,000.00</th>
                    </tr>
                    <tr>
                        <th style="border-left:2px solid #000;border-bottom:2px solid #000;border-right:none;padding-right: 12px;width:64%;"  class="text-right">Received (Riel) :</th>
                        <th style="border-bottom:2px solid #000;border-right:2px solid #000;border-left:none;" class="text-right">20000</th>
                    </tr>

                    <tr>
                        <th style="border-top:2px dotted #000;padding-right: 12px;" class="text-right">Change (USD)</th>
                        <th style="border-top:2px dotted #000" class="text-right">
                            9,244.76						</th>
                    </tr>
                    <tr>
                        <th style="border-top:2px dotted #000;padding-right: 12px;" class="text-right">Change (KHM)</th>
                        <th style="border-top:2px dotted #000" class="text-right">38,828,000</th>
                    </tr>


                </table>
                <div style="width:100%;text-align:left;margin-top:10px;display:none">
                    ពិន្ទុចាស់ - Old Point 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b></b><br/>
                    ពិន្ទុសរុប - Total Point 	&nbsp;&nbsp;: <b></b>
                </div>
                <div style="text-align:center;font-size:11px;margin-top:10px;">
                    Thank you! <br>
                    ~ ~ ~ <b>IT Group</b> &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">www.itgoup.com.kh</span> ~ ~ ~
                </div>

                <!--<div class="alert alert-success">
                                    <h4>US 0.00 = 0 ៛</h4>
                </div>-->


            </div>
            <div class="text-center">
                <div style="clear:both;"></div>
            </div>
            <div id="buttons" style="padding-top:10px; text-transform:uppercase;" class="no-print">
                <hr>

                <span class="pull-right col-xs-12">
        <a href="javascript:window.print()" id="web_print" class="btn btn-block btn-primary"
           onClick="window.print();return false;">Re-Print</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="{{url('admin/print_')}}" target="_blank" class="btn btn-block btn-primary" >print a4</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="{{url('admin/p_invoice')}}" target="_blank" class="btn btn-block btn-primary" >print invoice</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="{{url('admin/print-rks')}}" target="_blank" class="btn btn-block btn-primary" >print a4 rks</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="{{url('admin/invoice-landscape-a5')}}" target="_blank" class="btn btn-block btn-primary" >print a5</a>
    </span>
                <!--<span class="pull-right col-xs-12">
                    <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/tax_invoice/293" target="_blank" class="btn btn-block btn-primary" >PRINT TAX INVOICE</a>
                </span>	-->
                <span class="pull-right col-xs-12">
        <a href="{{url('admin/print-receipt')}}" target="_blank" class="btn btn-block btn-primary" >Print Receipt</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="{{url('admin/cash-receipt')}}" target="_blank" class="btn btn-block btn-primary" >cash receipt</a>
    </span>
                <!--<span class="pull-right col-xs-12">
                <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/print_cabon/293" target="_blank" class="btn btn-block btn-primary" >print Cabon</a>
            </span>-->
                {{--<span class="pull-left col-xs-12"><a class="btn btn-block btn-success" href="#" id="email">Email</a></span>--}}

                <span class="col-xs-12">
        <a class="btn btn-block btn-warning" href="{{url('admin/sale')}}">Back to POS</a>
    </span>
                <div style="clear:both;"></div>
                <div class="col-xs-12" style="background:#F5F5F5; padding:10px;">
                    <p style="font-weight:bold;">Please don't forget to disble the header and footer in browser print
                        settings.</p>

                    <p style="text-transform: capitalize;"><strong>FF:</strong> File &gt; Print Setup &gt; Margin &amp;
                        Header/Footer Make all --blank--</p>

                    <p style="text-transform: capitalize;"><strong>chrome:</strong> Menu &gt; Print &gt; Disable Header/Footer
                        in Option &amp; Set Margins to None</p></div>
                <div style="clear:both;"></div>

            </div>

        </div>
        <canvas id="hidden_screenshot" style="display:none;">

        </canvas>
        <div class="canvas_con" style="display:none;"></div>
    </div>
</div>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#email').click(function () {
                    var email = prompt("Email Address", "poro@gmail.com");
                    if (email != null) {
                        $.ajax({
                            type: "post",
                            url: "#",
                            data: {token: "fcb41d11e2093a3c5b36ea9f4183c96e", email: email, id: 293},
                            dataType: "json",
                            success: function (data) {
                                alert(data.msg);
                            },
                            error: function () {
                                alert('Ajax request failed, pleas try again');
                                return false;
                            }
                        });
                    }
                    return false;
                });
            });
            $(window).load(function () {
                window.print();
            });
        </script>
</body>
</html>
