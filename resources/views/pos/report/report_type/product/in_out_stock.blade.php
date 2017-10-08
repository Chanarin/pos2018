@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.css')}}">
@endsection
@section('header')
    <section class="content-header">
        <h1>
            {{_t('Product In/Out Stock') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('product in/out stock')}}</li>
        </ol>
    </section>
@endsection
@section('content')

    <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 400px;">
                                <input type="text" id="q" name="table_search" class="form-control pull-right" placeholder="{{_t('Search')}}">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                    <input type="text" class="form-control pull-right" id="reservation">
                                    <input type="hidden" id="from-date">
                                    <input type="hidden" id="to-date">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat" id="search-report-by-date">{{_t('Search')}}</button>
                              {{--<button type="button" class="btn btn-info btn-flat" id="btnPrint">{{_t('Print')}}</button>--}}
                                </span>

                            </div>
                        </div>
                    </div>
                    <style>
                        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
                            border-top: 1px solid #2C2C2C;
                            text-align: center;
                        }
                    </style>
                    <div class="box-body table-responsive report-item-list">
                       {{--=--}}
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('graph_script')

    <script src="{{ asset('vendor/adminlte') }}/plugins/iCheck/icheck.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/dist/js/demo.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/select2/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

    <script src="{{asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('vendor/adminlte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript">
            $(function () {

                var start = moment().subtract(29, 'days');
                var end = moment();
                function cb(start, end) {
                    $('#reservation span').html(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
                    $('#from-date').val(start.format('YYYY/MM/DD'));
                    $('#to-date').val(end.format('YYYY/MM/DD'));
                }
                $('#reservation').daterangepicker({
                    startDate: start,
                    endDate: end,
                    locale: {
                        format: 'YYYY/MM/DD'
                    },
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'This Year': [moment().startOf('year'), moment().endOf('year')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                }, cb).on('apply.daterangepicker', function (ev, picker) {
                    var st = (picker.startDate.format('YYYY/MM/DD'));
                    var ed = (picker.endDate.format('YYYY/MM/DD'));
                    $('#from-date').val(st);
                    $('#to-date').val(ed);
                });
                cb(start, end);
//================================
                $.ajax({
                    url: '{{url('/admin/report-type/product/in-out/data')}}',
                    type: 'GET',
                    async: false,
                    dataType: 'html',
                    data: {
                        from_date: '',
                        to_date: '',
                        q:''
                    },
                    success: function (d) {
                        $('.report-item-list').html(d);
                    },
                    error: function (d) {
                        alert('error');
                    }
                });
                $('#search-report-by-date').on('click', function (e) {
                    e.preventDefault();
                    var from_date = $('#from-date').val();
                    var to_date = $('#to-date').val();
                    var q = $('#q').val();
                        $.ajax({
                            url: '{{url('/admin/report-type/product/in-out/data')}}',
                            type: 'GET',
                            async: false,
                            dataType: 'html',
                            data: {
                                from_date: from_date,
                                to_date: to_date,
                                q:q
                            },
                            success: function (d) {
                                $('.report-item-list').html(d);
                            },
                            error: function (d) {
                                alert('error');
                            }
                        });

                });
                $('body').delegate('.my-paginate ul li a', 'click', function (e) {
                    e.preventDefault();
                    var report_url = $(this).prop('href');
                    $.ajax({
                        url: report_url,
                        type: 'GET',
                        dataType: 'html',
                        success: function (d) {
                            $('.report-item-list').html(d);
                        },
                        error: function (d) {
                            alert('error');
                        }
                    });
                });
            });
        </script>
@endsection

