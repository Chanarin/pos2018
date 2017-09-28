@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
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
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(count($rows) > 0)
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>{{_t('No')}}</th>
                                <th>{{_t('Invoice Number')}}</th>
                                <th>{{_t('Date')}}</th>
                                <th>{{_t('Customer')}}</th>
                                <th>{{_t('phone')}}</th>
                                <th>{{_t('Deposit')}}</th>
                                <th>{{_t('Complete Price')}}</th>
                                <th>{{_t('Subtotal')}}</th>
                                <th>{{_t('Discount')}}</th>
                                <th>{{_t('Total Payable')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $count = 1;
                                $total_deposit = 0;
                                $complete_price = 0;
                                $total_amount = 0;
                                $total_discount = 0;
                                $total_payable = 0;
                                $total_paid = 0;
                                $total_remaining = 0;
                            @endphp

                            @foreach($rows as $row)
                                @php
                                    $total_deposit+= ($row->deposit);
                                    $complete_price+= ($row->complete_price);
                                    $total_amount+= ($row->total_amt);
                                    $total_discount+= ($row->total_discount);
                                    $total_payable+= ($row->total_payable);
                                @endphp

                                <tr style="height: 30px ;   @if($loop->index % 2 > 0) background-color: #f1f1f1; @endif">
                                    <td class="text-left">{{ (($rows->currentPage()-1)*$rows->perPage())+$count++ }}</td>
                                    <td>{{$row->invoice_number }}</td>
                                    <td>{{\Carbon\Carbon::parse($row->_date_)->format('d/m/Y') }}</td>
                                    <td>{{$row->customer->name}}</td>
                                    <td>{{$row->customer->phone}}</td>
                                    <td>$ {{number_format($row->deposit ,2)}}</td>
                                    <td>$ {{number_format($row->complete_price ,2)}}</td>
                                    <td>$ {{number_format($row->total_amt ,2)}}</td>
                                    <td>$ {{number_format($row->total_discount ,2)}}</td>
                                    <td>$ {{number_format($row->total_payable ,2)}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr style="background-color: #428BCA;color:white;border-color: #357EBD;">
                                <th style="text-align: right;">Total</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>

                                <td style="padding-left: 15px;">$ {{number_format($total_deposit,2)}} </td>
                                <td style="padding-left: 15px;">$ {{number_format($complete_price,2)}} </td>
                                <td style="padding-left: 15px;">$ {{number_format($total_amount,2)}} </td>
                                <td style="padding-left: 15px;">$ {{number_format($total_discount,2)}} </td>
                                <td style="padding-left: 15px;">$ {{number_format($total_payable,2)}} </td>
                            </tr>

                            </tfoot>
                        </table>
                        @else
                            <h2 align="center">{{_t('Not Record Found')}}</h2>

                        @endif
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>

@endsection
@section('graph_script')
    <script src="{{ asset('vendor/adminlte/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/backpack/crud/js/list.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>


    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('vendor/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('vendor/adminlte/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/adminlte/plugins/fastclick/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/dist/js/app.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('vendor/adminlte/dist/js/demo.js') }}"></script>
    <!-- page script -->
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@endsection

