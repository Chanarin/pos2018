@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
@endsection

{{--@section('header')--}}
{{--<section class="content-header">--}}
{{--<h1>--}}
{{--{{ trans('backpack::base.dashboard') }}<small>Checklist Item</small>--}}
{{--</h1>--}}
{{--<ol class="breadcrumb">--}}
{{--<li><a href="{{url('admin/dashboard')}}">{{ config('backpack.base.project_name') }}</a></li>--}}
{{--<li class="active">Checklist Item</li>--}}
{{--</ol>--}}
{{--</section>--}}
{{--@endsection--}}
@section('content')
    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
    <div class="box">
        <div class="box-header with-border col-md-12">

            <div class=" pull-left text-left">
                <h3 class="box-title" style="text-align: left !important;">Checklist Table</h3>
            </div>

            <div class=" pull-right text-right">

                <button class="btn btn-xs btn-default no-print pull-left" onclick="printContent('print-checklist')">
                    <i class="fa fa-print"></i>&nbsp;PRINT
                </button>
            </div>
        </div>
        <div class="box-body" id="print-checklist">
            <table class="table-responsive"  width="1024px"  border="0" cellspacing="0" style="margin:auto;">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px; margin-top: 10px;">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 " style="text-align: center;">
                        <img src="{{asset('/pos/img/logo.jpg')}}" width="100" height="100"
                             alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: center;">
                        <span style="font-size: 24px;"><b>CHECKLIST STOCKT</b></span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <br>
                        <div style="text-align: left;">
                            {{--/Invoice No--}}
                            <span style="font-size: 14px;"><b>លេខវិកយបត្រ :</b> CL/1708/00005</span><br><br>
                            {{--​/Date--}}
                            <span style="font-size: 14px;"><b>ថ្ងៃទី :</b> 14/08/2017 08:32</span>
                        </div>
                    </div>
                </div>
                <tr>
                    <td style="height:5px;" colspan="2"></td>
                </tr>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Image</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th style="width: 120px">Note</th>
                        <th style="width: 10px">Tick</th>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td> <img src="{{asset('pos/img/item1.jpg')}}" width="50" height="50"></td>
                        <td>P00001</td>
                        <td>product name one </td>
                        <td>ជី</td>
                        <td>2</td>
                        <td>$ 100</td>
                        <td>$ 200</td>
                        <td></td>
                        <td style="text-align: center;"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td> <img src="{{asset('pos/img/item1.jpg')}}" width="50" height="50"></td>
                        <td>P00001</td>
                        <td>product name one </td>
                        <td>ជី</td>
                        <td>2</td>
                        <td>$ 100</td>
                        <td>$ 200</td>
                        <td></td>
                        <td style="text-align: center;"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td> <img src="{{asset('pos/img/item1.jpg')}}" width="50" height="50"></td>
                        <td>P00001</td>
                        <td>product name one </td>
                        <td>ជី</td>
                        <td>2</td>
                        <td>$ 100</td>
                        <td>$ 200</td>
                        <td></td>
                        <td style="text-align: center;"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td> <img src="{{asset('pos/img/item1.jpg')}}" width="50" height="50"></td>
                        <td>P00001</td>
                        <td>product name one </td>
                        <td>ជី</td>
                        <td>2</td>
                        <td>$ 100</td>
                        <td>$ 200</td>
                        <td></td>
                        <td style="text-align: center;"><input type="checkbox"></td>
                    </tr>
                </table>
            </table>
        </div>
    </div>
@endsection
@section('graph_script')

@endsection

