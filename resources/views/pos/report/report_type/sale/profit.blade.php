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
            {{_t('Sale Profit') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('sale profit')}}</li>
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
                        border-top: 1px solid #CCCCCC;
                    }
                </style>
                @if(count($rows) > 0)
                    <div class="box-body table-responsive">

                        <table class="table table-hover" border="1" style="border-color: #CCCCCC">
                            <tr style="background-color: #7B7777; color: white;border-color: #CCCCCC">
                                <th>{{_t('No')}}</th>
                                <th>{{_t('Invoice Number')}}</th>
                                <th>{{_t('Date')}}</th>
                                <th>{{_t('Customer')}}</th>
                                <th>{{_t('Total Cost')}}</th>
                                <th>{{_t('Total Price')}}</th>
                                <th>{{_t('Total Discount')}}</th>
                                <th>{{_t('Total Payable')}}</th>
                                <th>{{_t('Profit')}}</th>
                            </tr>
                            @php
                                $count = 1;
                                $total_costs = 0;
                                $total_amount = 0;
                                $total_discount = 0;
                                $total_payable = 0;
                                $total_paid = 0;
                                $total_remaining = 0;
                            @endphp

                            @foreach($rows as $row)
                                @php
                                    $total_amount+= ($row->total_amt);
                                   $total_discount+= ($row->total_discount);
                                   $total_payable+= ($row->total_payable);
                                   $rowds = \App\Models\InvoiceDetail::where('ref_id',$row->id)->selectRaw('sum(qty*cost) as total_cost')->first();
                                   $total_cost = $rowds != null?$rowds->total_cost:0;

                                    $total_costs+= $total_cost;
                                @endphp
                                <tr style="@if($loop->index % 2 > 0) background-color: #f1f1f1; @endif">
                                    <td class="text-left">{{ (($rows->currentPage()-1)*$rows->perPage())+$count++ }}</td>
                                    <td>{{$row->invoice_number }}</td>
                                    <td>{{\Carbon\Carbon::parse($row->_date_)->format('d/m/Y') }}</td>
                                    <td>{{$row->customer->name}}</td>
                                    <td>$ {{number_format($total_cost,2)}}</td>
                                    <td>$ {{number_format($row->total_amt ,2)}}</td>
                                    <td>$ {{number_format($row->total_discount ,2)}}</td>
                                    <td>$ {{number_format($row->total_payable ,2)}}</td>
                                    <td>$ {{number_format(($row->total_payable)-$total_cost ,2)}}</td>
                                </tr>
                            @endforeach
                            <tr style="background-color: #428BCA; color: white;">
                                <th style="text-align: right;">Total</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th style="padding-left: 15px;">$ {{number_format($total_costs,2)}}</th>
                                <td style="padding-left: 15px;">$ {{number_format($total_amount,2)}} </td>
                                <td style="padding-left: 15px;">$ {{number_format($total_discount,2)}} </td>
                                <td style="padding-left: 15px;">$ {{number_format($total_payable,2)}} </td>
                                <td style="padding-left: 15px;">$ {{number_format($total_payable-$total_costs,2)}}</td>
                            </tr>
                        </table>

                        <div align="center" class="my-paginate" >
                            {!! $rows->links() !!}
                        </div>
                    </div>
                @else
                    <h2 align="center">{{_t('Not Record Found')}}</h2>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('graph_script')
    <script src="{{ asset('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
@endsection

{{--<td><span class="label label-success">Approved</span></td>--}}


