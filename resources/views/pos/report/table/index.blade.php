@extends('backpack::layout2')

@section('header')

    <section class="content-header">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <div class="col-md-10" >
                    <!-- Date range -->
                    <div class="col-md-4 input-group-sm">
                        <input type="text" id="q" class="form-control pull-right" placeholder="search here...">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">

                            <div class="input-group input-group-sm">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="reservation">
                                <input type="hidden" id="from-date">
                                <input type="hidden" id="to-date">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-info btn-flat" id="search-report-by-date">Search</button>
                                </span>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
                <li><a href="#" class="btn btn-xs btn-default" onclick="printContent('report-print')"><i class="fa fa-fw fa-print"></i> PRINT</a></li>
                {{--<li><a href="#" class="btn btn-xs btn-default" id="cmd" ><i class="fa fa-fw fa-file-pdf-o"></i> PDF</a></li>--}}
                {{--<li><a href="#" class="btn btn-xs btn-default" id="btnExport"><i class="fa fa-fw fa-file-excel-o"></i> EXCEL</a></li>--}}
            </ol>
        </div>

    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">
                    <div class="col-md-12 table-responsive report-item-list report-item-detail">
                        {{--========================list report===================--}}
                        <div style="min-height: 450px;"></div>
                        {{--===========end list report=============--}}
                    </div>
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
@endsection
