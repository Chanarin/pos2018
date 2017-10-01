@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/skins/_all-skins.min.css">

@endsection
@section('header')
    <section class="content-header">
        <h1>
            {{_t('Production Item List') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('production item list')}}</li>
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
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" id="q" name="table_search" class="form-control pull-right" placeholder="{{_t('Search')}}">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default search-button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
                        border-top: 1px solid #CCCCCC;
                    }
                </style>

                    <div class="box-body table-responsive show-item-list">

                    </div>

            </div>
        </div>
    </div>
@endsection
@section('graph_script')
    <script src="{{ asset('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <script>
        $(function () {
            $.ajax({
                url: '{{url('/admin/report-type/production-item/list/data')}}',
                type: 'GET',
                async: false,
                dataType: 'html',
                data: {
                    q:''
                },
                success: function (d) {
                    $('.show-item-list').html(d);
                },
                error: function (d) {
                    alert('error');
                }
            });
            $('#q').on('keyup',function (e) {
                e.preventDefault();
                var q = $('#q').val();
                $.ajax({
                    url: '{{url('/admin/report-type/production-item/list/data')}}',
                    type: 'GET',
                    async: false,
                    dataType: 'html',
                    data: {
                        q:q
                    },
                    success: function (d) {
                        $('.show-item-list').html(d);
                    },
                    error: function (d) {
                        alert('error');
                    }
                });
            });

            $('.search-button').on('click', function (e) {
                e.preventDefault();

                var q = $('#q').val();
                $.ajax({
                    url: '{{url('/admin/report-type/production-item/list/data')}}',
                    type: 'GET',
                    async: false,
                    dataType: 'html',
                    data: {
                        q:q
                    },
                    success: function (d) {
                        $('.show-item-list').html(d);
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
                        $('.show-item-list').html(d);
                    },
                    error: function (d) {
                        alert('error');
                    }
                });
            });
        });
    </script>
@endsection


