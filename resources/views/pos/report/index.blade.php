@extends('backpack::layout2')
@section('graph_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/plugins/datepicker/datepicker3.css">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            border: 0;
        }

        a {
            display: inline-block;
            padding: 1em;
            text-decoration: none;
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            /*border-radius: 0 0px 0px 0;*/
        }

        #A,
        #B {
            position: absolute;
            transition: all 500ms;
        }

        #A {
            top: 0px;
            width: 200px;
            bottom: 0px;
            background: #BDC3C7;
        }

        #B {
            top: 0px;
            left: 200px;
            right: 0;
            bottom: 0px;
            background: #ffffff;
        }

        #toggle {
            display: none;
        }

        label {
            position: relative;
            left: 200px;
            /*Set the left position to the same as the sidebar */

            top: 17px;
            /*margin: 1px;*/
            z-index: 2;
            transition: all 500ms;
            padding: 2px 2px 2px 2px;
            background: #ffff;
        }
        @media (max-width: 1024px) {
            label {
                position: relative;
                left: 200px;
                top: -1px !important;
                z-index: 2;
                transition: all 500ms;
                padding: 2px 2px 2px 2px;
                background: #ffff;
            }
        }

        #toggle:checked ~ #A,
        #toggle:checked ~ #B {
            left: -200px;
        }
        /*move label to follow sidebar animation*/

        #toggle:checked,
        #toggle:checked ~ label {
            left: 0;
            background: #FFF;
        }
        #toggle:checked ~ #B {
            left: 0px;
            background: #FFF;
        }
        #toggle ~ #A {
            left: 0;
        }
    </style>
@endsection
@section('hearder-report')
    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
    <br>
    <div class="col-md-12 col-sm-12 col-xs-12" style="color: #ffffff;">
        <div class="col-md-2 " style="text-align: left;">
            <button style="background-color: red; color: white; border-color: rgba(204,0,0,0.81);" onclick="document.location.href='{{url('/admin/dashboard')}}';" type="button"><i class="fa fa-fw fa-angle-double-left"></i> Back</button>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: right !important;">
            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-sm-4 col-xs-4 control-label">FROM : </div>

                <div class="col-md-8 col-sm-8 col-xs-8 input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: left !important;">
            <div class="form-group col-md-12 col-xs-12" style="text-align: left !important;">
                <div class="col-md-4 col-sm-4 col-xs-4 control-label"> TO : </div>
                <div class="col-md-8 col-sm-8 col-xs-8 input-group date" style="text-align: left !important;">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                </div>
            </div>
        </div>
        <div class="col-md-2 ">
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center">
        <button type="button" style="background-color: #FF00FF; color: #FFFFFF; border-color: #CC66FF;"><i class="fa fa-fw fa-search"></i> VIEW</button>&nbsp;&nbsp;&nbsp;<button type="button" class="" onclick="printContent('report-print')" style="background-color: #4CAF50; color: #FFFFFF; border-color: #8BC34A; "><i class="fa fa-fw fa-print"></i> PRINT</button>&nbsp;&nbsp;&nbsp;<button type="button" style="background-color: #FF9800; color: #FFFFFF; border-color: #FB8C00; "><i class="fa fa-fw fa-file-pdf-o"></i> PDF</button>&nbsp;&nbsp;&nbsp;<button type="button" style="background-color: #5E35B1; color: #FFFFFF; border-color: #7E57C2; "><i class="fa fa-fw fa-file-excel-o"></i> EXCEL</button>
    </div>
@endsection
@section('content')
    <div id="A" style="margin-bottom: 0px !important;">
        <div>
            <section class="sidebar" style="height: 100%; margin-top: 120px;">
                <h4> &nbsp;&nbsp;<b>Open Item</b></h4>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="list" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;List<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="detail" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;Detail<br>

                <h4> &nbsp;&nbsp;<b>Purchase Item</b></h4>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="list" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;List<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="detail" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;Detail<br>

                <h4> &nbsp;&nbsp;<b>Production Item</b></h4>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="list" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;List<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="detail" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;Detail<br>

                <h4> &nbsp;&nbsp;<b>Sale Item</b></h4>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="list" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;List<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="detail" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;Detail<br>

            </section>
        </div>
    </div>
    <input id="toggle" type="checkbox">
    <label for="toggle"><i style="color: #337AB7" class="fa fa-navicon fa-2x"></i></label>
    <div id="B" style="height: auto; margin-top: 120px;">
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

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-bordered" style="width: 100%;">
                        <tr style="font-size: 14px;">
                            <th style="width: 20px">#</th>
                            <th>open number</th>
                            <th>Date</th>
                            <th>description</th>
                            <th style="width: 20px"></th>
                        </tr>
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
                    </table>
                </div>
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
                                <td class="text-left"><img src="{{asset('/pos/img/item2.jpg')}}" width="60" height="50" alt=""></td>
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
@endsection
@section('graph_script')
    <script src="{{ asset('vendor/adminlte') }}/dist/js/demo.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/select2/select2.full.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script>
        $('#datepicker').datepicker({
            autoclose: true
        });
    </script>
@endsection