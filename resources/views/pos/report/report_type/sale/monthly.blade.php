@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
@endsection
@section('header')
    <section class="content-header">
        <h1>
            {{_t('Sale Monthly Report') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('sale monthly report')}}</li>
        </ol>
    </section>
@endsection
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                   {{--=========--}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="alerts"></div>
                            <style type="text/css">
                                .dfTable th, .dfTable td {
                                    text-align: center;
                                    vertical-align: middle;
                                }

                                .dfTable td {
                                    padding: 2px;
                                }

                                .data tr:nth-child(odd) td {
                                    color: #2FA4E7;
                                }

                                .data tr:nth-child(even) td {
                                    text-align: right;
                                }
                                .table > thead:first-child > tr:first-child > th, .table > thead:first-child > tr:first-child > td, .table-striped thead tr.primary:nth-child(odd) th {
                                    background-color: #428BCA;
                                    color: white;
                                    border-color: #357EBD;
                                    border-top: 1px solid #357EBD;
                                    text-align: center;
                                }


                            </style>
                            <div class="box">
                                <div class="box-header">
                                    <h2 class="blue"><i class="fa-fw fa fa-calendar"></i>Sales Monthly</h2>
                                </div>
                                <div class="box-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="introtext">You can change the month by clicking the &gt;&gt; (next) or &lt;&lt; (previous)</p>

                                            <div class="table-responsive" id="style">
                                                <table class="table table-bordered table-striped dfTable reports-table">
                                                    <thead>
                                                    <tr class="year_roller">
                                                        <th>
                                                            <a style="color: white;" class="white" href="reports/monthly_sales/2016">
                                                                <b>&lt;&lt;</b>
                                                            </a>
                                                        </th>
                                                        <th colspan="10"> 2017</th>
                                                        <th>
                                                            <a style="color: white;" class="white" href="reports/monthly_sales/2018">
                                                                <b>&gt;&gt;</b>
                                                            </a>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/01" data-toggle="modal" data-target="#myModal">
                                                                January                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/02" data-toggle="modal" data-target="#myModal">
                                                                February                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/03" data-toggle="modal" data-target="#myModal">
                                                                March                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/04" data-toggle="modal" data-target="#myModal">
                                                                April                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/05" data-toggle="modal" data-target="#myModal">
                                                                May                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/06" data-toggle="modal" data-target="#myModal">
                                                                June                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/07" data-toggle="modal" data-target="#myModal">
                                                                July                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/08" data-toggle="modal" data-target="#myModal">
                                                                August                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/09" data-toggle="modal" data-target="#myModal">
                                                                September                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/10" data-toggle="modal" data-target="#myModal">
                                                                October                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/11" data-toggle="modal" data-target="#myModal">
                                                                November                                </a>
                                                        </td>
                                                        <td class="bold text-center">
                                                            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/monthly_profit/2017/12" data-toggle="modal" data-target="#myModal">
                                                                December                                </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="8.3%"><strong>0</strong></td><td width="8.3%"><strong>0</strong></td><td width="8.3%"><strong>0</strong></td><td width="8.3%"><strong>0</strong></td><td width="8.3%"><strong>0</strong></td><td width="8.3%"><strong>0</strong></td><td width="8.3%"><strong>0</strong></td><td width="8.3%"><strong>0</strong></td><td width="8.3%"><table class="table table-bordered table-hover table-striped table-condensed data" style="margin:0;"><tbody>
                                                                <tr><td>Amount</td></tr>
                                                                <tr><td>4,710.00</td></tr>
                                                                <tr><td>Order Discount</td></tr>
                                                                <tr><td>274.00</td></tr>
                                                                <tr><td>Shipping</td></tr>
                                                                <tr><td>0.00</td></tr>
                                                                <tr><td>Product Tax</td></tr>
                                                                <tr><td>0.00</td></tr>
                                                                <tr><td>Refund</td></tr>
                                                                <tr><td>0.00</td></tr>
                                                                <tr><td>Order Tax</td></tr>
                                                                <tr><td>0.00</td></tr>
                                                                <tr><td>Total</td></tr>
                                                                <tr><td>4,436.00</td></tr>
                                                                <tr><td>Award Points</td></tr>
                                                                <tr><td>47</td></tr>
                                                                </tbody></table></td><td width="8.3%"><strong>0</strong></td><td width="8.3%"><strong>0</strong></td><td width="8.3%"><strong>0</strong></td>                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

@endsection
@section('graph_script')

@endsection

