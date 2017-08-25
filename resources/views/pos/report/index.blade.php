@extends('backpack::layout2')

@section('header')
    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
    <section class="content-header">
        <a href="#" class="btn btn-xs btn-default">
            <i class="fa fa-fw fa-search"></i> VIEW
        </a>
        <ol class="breadcrumb">
            <li><a href="#" class="btn btn-xs btn-default" onclick="printContent('report-print')"><i class="fa fa-fw fa-print"></i> PRINT</a></li>
            <li><a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-file-pdf-o"></i> PDF</a></li>
            <li><a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-file-excel-o"></i> EXCEL</a></li>
        </ol>
    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">
                    <div id="report-print">
                        <div class="col-md-12 table-responsive">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px; margin-top: 10px;">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 " style="text-align: center;">
                                    <img src="{{asset('/pos/img/logo.jpg')}}" width="90" height="90" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: center;">
                                    <span style="font-size: 24px;"><b>POS SHOP REPORT</b></span><br>
                                    <span style="font-size: 18px;"><b>OPEN ITEM REPORT</b></span>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

                                </div>
                            </div>
                            {{--========================list report===================--}}
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <table class="table table-bordered" style="width: 100%;">
                                    <thead>
                                    <tr style="font-size: 14px;">
                                        <th style="width: 20px">#</th>
                                        <th>open number</th>
                                        <th>Date</th>
                                        <th>description</th>
                                        <th style="width: 20px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr style="font-size: 12px;">
                                        <td>1.</td>
                                        <td>OP00001</td>
                                        <td>09/09/2017</td>
                                        <td>lkdsjflafjlasdjf</td>
                                        <td><button type="button" data-toggle="modal" data-target="#popUpItemDetail"><i class="fa fa-search">
                                                </i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                            {{--===========end list report=============--}}
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div>
                                    <table style="width: 100%; margin-bottom: 10px; margin-top: 10px;">
                                        <tbody style="font-size: 14px;">
                                        <tr style="text-align:center;">
                                            <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Number</b></span> : OP00001</td>
                                            <td style="vertical-align:middle;text-align:left;"><span><b>Open Date</b></span> : 09/09/2017</td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>Description</b></span> : lskdjflasdfjlsafjdlasflsajflksa</td>
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
                                    <tr class="item">
                                        <td class="text-left"></td>
                                        <td class="text-left">P001</td>
                                        <td class="text-left"><img src="{{asset('/pos/img/item1.jpg')}}" width="60" height="50" alt=""></td>
                                        <td class="text-center">Title</td>
                                        <td class="text-center">P</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center"  style="text-align:right; width:65px !important">$ 460.00</td>
                                        <td class="text-right">$ 460.00</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal fade" id="popUpItemDetail" tabindex="-1" role="dialog" aria-labelledby="popUpItemDetail" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-2x">×</i></span><span class="sr-only">Close</span></button>
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <h4 class="modal-title" id="mModalLabel">Open Item Detail</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="" onclick="printContent('print-report-detail')">PRINT</button>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                                <div class="modal-body" id="pr_popover_content">
                                    <div class="col-md-12" id="print-report-detail">
                                        <div style="font-size:11px;">
                                            <table style="width: 100%;">
                                                <tbody style="font-size: 14px;">
                                                <tr style="text-align:center;">
                                                    <td style="vertical-align:middle;text-align:left; padding-left:10px;">Open Number : OP00001</td>
                                                    <td style="vertical-align:middle;text-align:left;">Open Date : 09/09/2017</td>
                                                </tr>
                                                <tr style="text-align:center;">
                                                    <td style="vertical-align:middle;text-align:left; padding-left:10px;">Description : lskdjflasdfjlsafjdlasflsajflksa</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <table class="table-condensed receipt" style="width:100%;">
                                            <thead>
                                            <tr style="border:1px dotted black !important;">
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
                                            <tbody>
                                            <tr class="item">
                                                <td class="text-left">1</td>
                                                <td class="text-left">P001</td>
                                                <td class="text-left"><img src="{{asset('/pos/img/item1.jpg')}}" width="60" height="50" alt=""></td>
                                                <td class="text-center">Title</td>
                                                <td class="text-center">ជី</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center"  style="text-align:right; width:65px !important">$ 460.00</td><td class="text-right">$ 460.00</td>
                                            </tr>
                                            <tr class="item">
                                                <td class="text-left"></td>
                                                <td class="text-left">P001</td>
                                                <td class="text-left"><img src="{{asset('/pos/img/item1.jpg')}}" width="60" height="50" alt=""></td>
                                                <td class="text-center">Title</td>
                                                <td class="text-center">P</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center"  style="text-align:right; width:65px !important">$ 460.00</td>
                                                <td class="text-right">$ 460.00</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
