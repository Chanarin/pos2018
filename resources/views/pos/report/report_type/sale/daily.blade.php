@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
@endsection
@section('header')
    <section class="content-header">
        <h1>
            {{_t('Open Item List') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('Sale Report Detail')}}</li>
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
                            <div id="alerts"></div><style>
                                .table th {
                                    text-align: center;
                                }

                                .table td {
                                    padding: 2px;
                                }

                                .table td .table td:nth-child(odd) {
                                    text-align: left;
                                }

                                .table td .table td:nth-child(even) {
                                    text-align: right;
                                }

                                .table a:hover {
                                    text-decoration: none;
                                }

                                .cl_wday {
                                    text-align: center;
                                    font-weight: bold;
                                }

                                .cl_equal {
                                    width: 14%;
                                }

                                td.day {
                                    width: 14%;
                                    padding: 0 !important;
                                    vertical-align: top !important;
                                }

                                .day_num {
                                    width: 100%;
                                    text-align: left;
                                    cursor: pointer;
                                    margin: 0;
                                    padding: 8px;
                                }

                                .day_num:hover {
                                    background: #F5F5F5;
                                }

                                .content {
                                    width: 100%;
                                    text-align: left;
                                    color: #428bca;
                                    padding: 8px;
                                }

                                .highlight {
                                    color: #0088CC;
                                    font-weight: bold;
                                }
                            </style>
                            <div class="box">
                                <div class="box-header">
                                    <h2 class="blue"><i class="fa-fw fa fa-calendar"></i>Sales Daily</h2>
                                </div>
                                <div class="box-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="introtext">You can click the date to get day's profit and/or loss report. You can change the month by clicking the &gt;&gt; (next) or &lt;&lt; (previous)</p>

                                            <div id="style">
                                                <table border="0" cellpadding="0" cellspacing="0" class="table table-bordered dfTable">

                                                    <tbody><tr>
                                                        <th><a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/daily_sales/2017/08">&lt;&lt;</a></th>
                                                        <th colspan="5" id="month_year">September&nbsp;2017</th>
                                                        <th><a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/daily_sales/2017/10">&gt;&gt;</a></th>
                                                    </tr>

                                                    <tr>
                                                        <td class="cl_wday">Sunday</td><td class="cl_wday">Monday</td><td class="cl_wday">Tuesday</td><td class="cl_wday">Wednesday</td><td class="cl_wday">Thursday</td><td class="cl_wday">Friday</td><td class="cl_wday">Saturday</td>
                                                    </tr>

                                                    <tr class="days">
                                                        <td class="day">&nbsp;</td><td class="day">&nbsp;</td><td class="day">&nbsp;</td><td class="day">&nbsp;</td><td class="day">&nbsp;</td><td class="day"><div class="day_num">1</div></td><td class="day"><div class="day_num">2</div></td>
                                                    </tr>

                                                    <tr class="days">
                                                        <td class="day"><div class="day_num">3</div></td><td class="day"><div class="day_num">4</div></td><td class="day"><div class="day_num">5</div></td><td class="day"><div class="day_num">6</div></td><td class="day"><div class="day_num">7</div></td><td class="day"><div class="day_num">8</div></td><td class="day"><div class="day_num">9</div></td>
                                                    </tr>

                                                    <tr class="days">
                                                        <td class="day"><div class="day_num">10</div></td><td class="day"><div class="day_num">11</div></td><td class="day"><div class="day_num">12</div></td><td class="day"><div class="day_num">13</div></td><td class="day"><div class="day_num">14</div></td><td class="day"><div class="day_num">15</div></td><td class="day"><div class="day_num">16</div></td>
                                                    </tr>

                                                    <tr class="days">
                                                        <td class="day"><div class="day_num">17</div></td><td class="day"><div class="day_num">18</div></td><td class="day"><div class="day_num">19</div></td><td class="day"><div class="day_num">20</div></td><td class="day"><div class="day_num">21</div></td><td class="day"><div class="day_num">22</div></td><td class="day"><div class="day_num">23</div></td>
                                                    </tr>

                                                    <tr class="days">
                                                        <td class="day"><div class="day_num">24</div></td><td class="day">
                                                            <div class="day_num">25</div>
                                                            <div class="content"><table class="table table-bordered table-hover table-striped table-condensed data" style="margin:0;">
                                                                    <tbody><tr><td>Amount</td><td>700.00</td></tr>
                                                                    <tr><td>Order Discount</td><td>0.00</td></tr>
                                                                    <tr><td>Shipping</td><td>0.00</td></tr>
                                                                    <tr><td>Product Tax</td><td>0.00</td></tr>
                                                                    <tr><td>Refund</td><td>0.00</td></tr>
                                                                    <tr><td>Order Tax</td><td>0.00</td></tr>
                                                                    <tr><td>Total</td><td>700.00</td></tr>
                                                                    <tr><td>Award Points</td><td>7</td></tr>
                                                                    </tbody></table></div>
                                                        </td><td class="day"><div class="day_num">26</div></td><td class="day">
                                                            <div class="day_num">27</div>
                                                            <div class="content"><table class="table table-bordered table-hover table-striped table-condensed data" style="margin:0;">
                                                                    <tbody><tr><td>Amount</td><td>4,010.00</td></tr>
                                                                    <tr><td>Order Discount</td><td>274.00</td></tr>
                                                                    <tr><td>Shipping</td><td>0.00</td></tr>
                                                                    <tr><td>Product Tax</td><td>0.00</td></tr>
                                                                    <tr><td>Refund</td><td>0.00</td></tr>
                                                                    <tr><td>Order Tax</td><td>0.00</td></tr>
                                                                    <tr><td>Total</td><td>3,736.00</td></tr>
                                                                    <tr><td>Award Points</td><td>40</td></tr>
                                                                    </tbody></table></div>
                                                        </td><td class="day"><div class="day_num highlight">28</div></td><td class="day"><div class="day_num">29</div></td><td class="day"><div class="day_num">30</div></td>
                                                    </tr>

                                                    </tbody></table>                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
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

