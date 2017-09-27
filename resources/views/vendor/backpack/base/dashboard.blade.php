@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
@endsection
@section('header')
    <section class="content-header">
      <h1>
        {{_t('dashboard') }}<small>{{_t('first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{_t('dashboard')}}</li>
      </ol>
    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{_t('login_status')}}</div>
                </div>
                <!-- Main content -->
                <style>
                    .bg-size{
                        text-align: center; padding: 5px;
                    }
                    .fon-size{
                        font-size: 22px;

                    }
                    .col-md-12, .col-md-2,.col-sm-4, .col-xs-6{
                        position: relative;
                        min-height: 1px;
                        padding-right: 5px !important;
                        padding-left: 5px !important;
                    }
                    .content {
                        min-height: 20px !important;
                        padding: 15px;
                        margin-right: auto;
                        margin-left: auto;
                    }
                </style>
                <section class="content">
                    <div class="row">
                        <a href="{{url('/admin/sale')}}">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="info-box bg-aqua">
                                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/sale.png')}}"></i>
                                    </span>
                                        <br>
                                        <span class="fon-size" style=""><b>{{_t('POS')}}</b></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/admin/invoice')}}">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="info-box bg-red">
                                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/check.png')}}"></i>
                                    </span>
                                        <br>
                                        <span class="fon-size"><b>{{_t('Invoice')}}</b></span>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <a href="{{url('/admin/customer')}}">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="info-box bg-red">
                                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/customer.png')}}"></i>
                                    </span>
                                        <br>
                                        <span class="fon-size"><b>{{_t('Customer')}}</b></span>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{url('/admin/view-report')}}">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="info-box bg-yellow">
                                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/report.png')}}"></i>
                                    </span>
                                        <br>
                                        <span class="fon-size"><b>{{_t('Report')}}</b></span>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{url('/admin/openitem')}}">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="info-box bg-red">
                                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/stock-in.png')}}"></i>
                                    </span>
                                        <br>
                                        <span class="fon-size"><b>{{_t('Open Stock')}}</b></span>
                                    </div>
                                </div>
                            </div>
                        </a>


                        <a href="{{url('/admin/purchase')}}">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="info-box bg-green">
                                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/purchase.png')}}"></i>
                                    </span>
                                        <br>
                                        <span class="fon-size"><b>{{_t('Purchase')}}</b></span>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{url('/admin/production')}}">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="info-box bg-green">
                                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/purchase.png')}}"></i>
                                    </span>
                                        <br>
                                        <span class="fon-size"><b>{{_t('Production')}}</b></span>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{url('/admin/checklist')}}">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="info-box bg-red">
                                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/check.png')}}"></i>
                                    </span>
                                        <br>
                                        <span class="fon-size"><b>{{_t('Check List')}}</b></span>
                                    </div>
                                </div>
                            </div>

                        </a>

                    </div>
                </section>


                {{--======================--}}
                <section class="content">
                    <div class="row">
                        <!-- /.col (LEFT) -->
                        <div class="col-md-12">
                            <!-- BAR CHART -->
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Sale Income Per Month</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="bar-chart" style="height: 300px;"></div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                        <div class="col-md-12">
                            <!-- DONUT CHART -->
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Item in Stock</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
                {{--======================--}}
                <div class="box-body">{{_t('logged_in') }}</div>
            </div>
        </div>
    </div>

@endsection
@section('graph_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/adminlte/') }}/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/') }}/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('vendor/adminlte/') }}/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            "use strict";
            //BAR CHART
            var bar = new Morris.Bar({
                element: 'bar-chart',
                resize: true,
                data: [

                    @foreach(\App\Models\Dashboard::saleOfWeek() as $row)
                    {y: '{{ $row['day'] }}', a: '{{ $row['total'] }}' - 0},
                    @endforeach

                ],
                barColors: ['#f56954'],
                xkey: 'y',
                ykeys: ['a'],
                labels: ['Sale'],
                hideHover: 'auto'
            });

            //PRODUCT IN STOCK CHART
            var donut = new Morris.Donut({
                element: 'sales-chart',
                resize: true,
                colors: ["#3c8dbc", "#f56954", "#00a65a", "#F39C12"],
                data: [
                    {label: "Sales", value: 12},
                    {label: "Open", value: 20},
                    {label: "Purchase", value: 30},
                    {label: "Production", value: 20}
                ],
                hideHover: 'auto'
            });

        });
    </script>
@endsection

