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
            {{_t('Open Item List') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('open item list')}}</li>
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
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
                            border-top: 1px solid #2C2C2C;
                        }
                    </style>
                    <div class="box-body table-responsive">
                        <table class="table table-hover" border="1">
                            <tr style="background-color: #7B7777; color: white;">
                                <th>ID</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Reason</th>
                            </tr>
                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-success">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            </tr>
                            <tr style="background-color: #428BCA; color: white;">
                                <th>[ID]</th>
                                <th>[User]</th>
                                <th>[Date]</th>
                                <th>[Status]</th>
                                <th>[Reason]</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    {{--<tr>--}}
        {{--<th rowspan="2">Location <span style="color:orange;">/</span> Category <span style="color:orange;">/</span> Item</th>--}}
        {{--<th rowspan="2">Begin</th>--}}
        {{--<th rowspan="2">Total In</th>--}}
        {{--<th colspan="1">OUT</th>--}}
        {{--<th rowspan="2">Total Out</th>--}}
        {{--<th rowspan="2">Balance</th>--}}
    {{--</tr>--}}
    {{--<tr class="shead">--}}
        {{--<th>Sale</th>--}}
    {{--</tr>--}}
@endsection
@section('graph_script')
    <script src="{{ asset('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
@endsection

