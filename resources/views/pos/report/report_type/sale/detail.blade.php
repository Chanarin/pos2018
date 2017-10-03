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
            {{_t('Sale Report Detial') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('sale report detail')}}</li>
        </ol>
    </section>
@endsection
@section('content')
    <style>
        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
            border-top: 1px solid #CCCCCC;
        }
    </style>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    @if(count($rows) > 0)
                        <table class="" style="width: 100%">
                            @php
                                $total_qty = 0;
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
                                    $total_paid+= ($row->paid+($row->paid_kh/$row->exchange_rate));
                                    $total_remaining+= (($row->paid+($row->paid_kh/$row->exchange_rate))-$row->total_payable);
                                @endphp

                                <tr style="">
                                    <td colspan="6">
                                        <table width="100%">
                                            <tr>
                                                <td width="33%" valign="top">

                                                    Huy Sombath Jewelry Shop.<br>
                                                    No.80Eo, St 19 Corner St. 154,<br>
                                                    Sangkat Phsar Kandal II,<br>
                                                    Khan Daun Penh, Phnom Penh<br>
                                                    Phone: (012) 669 175<br>

                                                </td>
                                                <td width="34%" valign="top">
                                                    {{_t('Customer Name')}}: {{$row->customer->name}}<br>
                                                    {{_t('Status')}}: {{$row->status}}<br>
                                                    {{_t('Note')}}: {{$row->payment_note}}<br>
                                                    @if($row->deposit != '')
                                                        {{_t('Deposit')}}: $ {{number_format($row->deposit,2)}}<br>
                                                        {{_t('Complete Price')}}: $ {{number_format($row->complete_price,2)}}<br>
                                                    @endif
                                                </td>
                                                <td width="33%" valign="top">
                                                    {{_t('Invoice Number')}}: {{$row->invoice_number}}<br>
                                                    {{_t('Invoice Due')}}: {{\Carbon\Carbon::parse($row->_date_)->format('d/m/Y') }}<br>
                                                    @if($row->complete_date != '')
                                                        {{_t('Complete Date')}}: {{\Carbon\Carbon::parse($row->complete_date)->format('d/m/Y') }}<br>
                                                    @endif
                                                    {{_t('Exchange Rate')}}: {{$row->exchange_rate}} ៛<br>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <br>
                                    </td>
                                </tr>
                                {{--  -------------------------------------------------------------------------------------}}
                                <table width="100%" class="table table-hover" border="1">
                                    <thead class="border" style="background: #CCCCCC">
                                    <tr style="background-color: #7B7777; color: white; border-color: #CCCCCC">
                                        <th class="text-center">{{_t('No')}}</th>
                                        <th class="text-center">{{_t('Image')}}</th>
                                        <th class="text-center">{{_t('Code')}}</th>
                                        <th class="text-center">{{_t('Name')}}</th>
                                        <th class="text-center">{{_t('Unit')}}</th>
                                        <th class="text-center">{{_t('Qty')}}</th>
                                        <th class="text-center">{{_t('Price')}}</th>
                                        <th class="text-center">{{_t('Total')}}</th>

                                    </tr>
                                    </thead>
                                    <tbody class="border" style=" border: 1px solid #CCC;">
                                    @php
                                        $rowds = \App\Models\InvoiceDetail::where('ref_id',$row->id)
                                              ->join('items','items.id','=','invoice_detail.item_id')
                                             ->selectRaw("items.id,
                                              invoice_detail.item_id,
                                              invoice_detail.item_code,
                                              invoice_detail.title,
                                              invoice_detail.unit,
                                              invoice_detail.num_qty,
                                              invoice_detail.qty,
                                              invoice_detail.cost,
                                              invoice_detail.price,
                                              invoice_detail.discount,
                                              invoice_detail.note,
                                              invoice_detail.item_detail,
                                              items.image")
                                              ->get();
                                    @endphp
                                    @foreach($rowds as $rd)
                                        @php
                                            $rds = \App\Models\ItemDetail::where('ref_id',$rd->item_id)->get();
                                            $total_qty+= ($rd->qty);
                                            $units = \App\Models\Unit::where('id',$rd->unit)->first();
                                            $oe = $loop->index;
                                        @endphp
                                        <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif color: #0586ff; font-weight: bold; border: 1px solid #CCC;">
                                            <td class="text-left">{{$loop->index+1}}</td>
                                            <td class="text-left">
                                                @php
                                                    $img = json_decode($rd->image);
                                                @endphp
                                                @if(count($img)>0)
                                                    <img src="{{url('img/cache/original/'.\App\Helpers\Glb::get_basename($img[0]))}}" width="60" height="60">
                                                @endif
                                            </td>
                                            <td class="text-left">{{$rd->item_code}}</td>
                                            <td class="text-left">{{$rd->title}}</td>
                                            <td class="text-left">{{isset($units->name)?$units->name:''}}</td>
                                            <td class="text-right">{{$rd->qty}}</td>
                                            <td class="text-right">$ {{number_format($rd->price,2)}}</td>
                                            <td class="text-right">$ {{number_format($rd->price*$rd->qty,2)}}</td>
                                        </tr>
                                        @if(count($rds)>0)
                                            @foreach($rds as $r)
                                                @php
                                                    $unit = \App\Models\Unit::where('id',$r->unit)->first();
                                                @endphp
                                                <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                                                    <td class="text-left"></td>
                                                    <td class="text-left"></td>
                                                    <td class="text-left">{{$r->item_code}}</td>
                                                    <td class="text-left">{{$r->title}}</td>
                                                    <td class="text-left">{{$r->num_qty}} {{isset($unit->name)?$unit->name:''}}</td>
                                                    <td class="text-right">{{$r->qty}}</td>
                                                    <td class="text-right">$ {{number_format($r->price,2)}}</td>
                                                    <td class="text-right">$ {{number_format($r->price*$r->qty,2)}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                                <table width="100%">
                                    <tr style="color: #0586ff; font-weight: bold;">
                                        <td colspan="5"></td>
                                        <td style="text-align:right;">{{_t('Grand Total')}}</td>
                                        <td style="text-align:right;">$ {{number_format($row->total_amt,2)}}</td>
                                        <td style="text-align:right;">{{number_format(($row->total_amt)*$row->exchange_rate,2)}} ៛</td>
                                    </tr>
                                    <tr style="color: #0586ff; font-weight: bold;">
                                        <td colspan="5"></td>
                                        <td style="text-align:right;">{{_t('Discount')}}</td>
                                        <td style="text-align:right;">$ {{number_format($row->total_discount,2)}}</td>
                                        <td style="text-align:right;">{{number_format(($row->total_discount)*$row->exchange_rate,2)}} ៛</td>
                                    </tr>
                                    <tr style="color: #0586ff; font-weight: bold;">
                                        <td colspan="5"></td>
                                        <td style="text-align:right;">{{_t('Total Payable')}}</td>
                                        <td style="text-align:right;">$ {{number_format($row->total_payable,2)}}</td>
                                        <td style="text-align:right;">{{number_format(($row->total_payable)*$row->exchange_rate,2)}} ៛</td>
                                    </tr>
                                    <tr style="color: #0586ff; font-weight: bold;">
                                        <td colspan="5"></td>
                                        <td style="text-align:right;">{{_t('Paid')}}</td>
                                        <td style="text-align:right;">$ {{number_format($row->paid+($row->paid_kh/$row->exchange_rate),2)}}</td>
                                        <td style="text-align:right;">{{number_format(($row->paid+($row->paid_kh/$row->exchange_rate))*$row->exchange_rate,2)}} ​​៛</td>
                                    </tr>
                                    <tr style="color: #0586ff; font-weight: bold;">
                                        <td colspan="5"></td>
                                        <td style="text-align:right;">{{_t('Remaining')}}</td>
                                        <td style="text-align:right;">$ {{number_format(($row->paid+($row->paid_kh/$row->exchange_rate))-$row->total_payable,2)}}</td>
                                        <td style="text-align:right;">{{number_format((($row->paid+($row->paid_kh/$row->exchange_rate))-$row->total_payable)*$row->exchange_rate,2)}}​ ៛</td>
                                    </tr>
                                    <tr>
                                        <td colspan="8">
                                            <br>
                                            <hr>
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                            @endforeach
                            <table width="100%">
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="6"></td>
                                    <td style="text-align:right;">{{_t('TOTAL QTY')}}</td>
                                    <td style="text-align:right;">{{$total_qty}} @if($total_qty > 1) {{_t('Units')}}  @else {{_t('Unit')}} @endif</td>
                                </tr>
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="6"></td>
                                    <td style="text-align:right;">{{_t('TOTAL DEPOSIT')}}</td>
                                    <td style="text-align:right;">$ {{number_format($total_deposit,2)}}</td>
                                </tr>
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="6"></td>
                                    <td style="text-align:right;">{{_t('TOTAL COMPLETE PRICE ')}}</td>
                                    <td style="text-align:right;">$ {{number_format($complete_price,2)}}</td>
                                </tr>
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="6"></td>
                                    <td style="text-align:right;">{{_t('GRAND TOTAL')}}</td>
                                    <td style="text-align:right;">$ {{number_format($total_amount,2)}}</td>
                                </tr>
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="6"></td>
                                    <td style="text-align:right;">{{_t('TOTAL DISCOUNT')}}</td>
                                    <td style="text-align:right;">$ {{number_format($total_discount,2)}}</td>
                                </tr>
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="6"></td>
                                    <td style="text-align:right;">{{_t('TOTAL PAYABLE')}}</td>
                                    <td style="text-align:right;">$ {{number_format($total_payable,2)}}</td>
                                </tr>
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="6"></td>
                                    <td style="text-align:right;">{{_t('TOTAL PAID')}}</td>
                                    <td style="text-align:right;">$ {{number_format($total_paid,2)}}</td>
                                </tr>
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="6"></td>
                                    <td style="text-align:right;">{{_t('TOTAL REMAINING')}}</td>
                                    <td style="text-align:right;">$ {{number_format($total_remaining,2)}}</td>
                                </tr>
                            </table>

                        </table>
                        <div class="my-paginate" align="center">
                            {!! $rows->links() !!}
                        </div>
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
    <script src="{{ asset('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
@endsection

