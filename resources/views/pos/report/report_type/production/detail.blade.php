@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
@endsection
@section('header')
    <section class="content-header">
        <h1>
            {{_t('Production Item Detail') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('production item detail')}}</li>
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
                        <table class="" style="width: 100%">

                            @php
                                $total_qty = 0;
                                $total_cost = 0;
                            @endphp
                            @foreach($rows as $row)
                                <tr style="">
                                    <td colspan="6">
                                        <table width="100%">
                                            <tr>
                                                <td width="33%" valign="top">
                                                    {{_t('Production Number')}}: {{$row->production_number}}<br>
                                                    Customer: {{$row->customer->name }}<br>
                                                </td>
                                                <td width="34%" valign="top">
                                                    {{_t('Production Due')}}: {{\Carbon\Carbon::parse($row->_date_)->format('d/m/Y') }}<br>
                                                </td>
                                                <td width="33%" valign="top">
                                                    {{_t('Description')}}: {{$row->description}}<br>
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
                                <table width="100%">
                                    <thead class="border" style="background: #CCCCCC">
                                    <tr style="border: 1px solid #CCC;">
                                        <th class="text-center">{{_t('No')}}</th>
                                        <th class="text-center">{{_t('Code')}}</th>
                                        <th class="text-center">{{_t('Name')}}</th>
                                        <th class="text-center">{{_t('Unit')}}</th>
                                        <th class="text-center">{{_t('Qty')}}</th>
                                        <th class="text-center">{{_t('Cost')}}</th>
                                        <th class="text-center">{{_t('Total')}}</th>

                                    </tr>
                                    </thead>
                                    <tbody class="border" style=" border: 1px solid #CCC;">
                                    @php
                                        $rowss = \App\Models\ProductionDetail::where('ref_id',$row->id)->get();
                                    @endphp
                                    @foreach($rowss as $rd)
                                        @php
                                            $total_qty+= ($rd->qty);
                                             $total_cost+= ($rd->cost*($rd->qty));
                                             $units = \App\Models\Unit::where('id',$rd->unit)->first();
                                           $oe = $loop->index;
                                        @endphp
                                        <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif color: #0586ff; font-weight: bold;  border: 1px solid #CCC;">
                                            <td class="text-left">{{$loop->index+1}}</td>
                                            <td class="text-left">{{$rd->item_code}}</td>
                                            <td class="text-left">{{$rd->title}}</td>
                                            <td class="text-left">{{isset($units->name)?$units->name:''}}</td>
                                            <td class="text-right">{{$rd->qty}}</td>
                                            <td class="text-right">$ {{number_format($rd->cost,2)}}</td>
                                            <td class="text-right">$ {{number_format($rd->cost*$rd->qty,2)}}</td>
                                        </tr>
                                        @if(count($rd->item_detail)>0)
                                            @foreach(json_decode($rd->item_detail) as $r)
                                                @php
                                                    $unit = \App\Models\Unit::where('id',$r->unit)->first();
                                                @endphp
                                                <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                                                    <td class="text-left"></td>
                                                    <td class="text-left">{{$r->item_code}}</td>
                                                    <td class="text-left">{{$r->title}}</td>
                                                    <td class="text-left">{{$r->num_qty}} {{isset($unit->name)?$unit->name:''}}</td>
                                                    <td class="text-right">{{$r->qty}}</td>
                                                    <td class="text-right">$ {{number_format($r->cost,2)}}</td>
                                                    <td class="text-right">$ {{number_format($r->cost*$r->qty,2)}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    </tbody>
                                    <tr>
                                        <td colspan="7">
                                            <br>
                                            <hr>
                                            <br>
                                        </td>

                                    </tr>
                                </table>
                            @endforeach
                            <table width="100%">
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="5"></td>
                                    <td style="text-align:right;">{{_t('TOTAL QTY')}}</td>
                                    <td style="text-align:right;">{{$total_qty}} @if($total_qty > 1) {{_t('Units')}}  @else {{_t('Unit')}} @endif </td>
                                </tr>
                                <tr style="color: #a00816; font-weight: bold;">
                                    <td colspan="5"></td>
                                    <td style="text-align:right;">{{_t('TOTAL COST')}}</td>
                                    <td style="text-align:right;">$ {{number_format($total_cost,2)}}</td>
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

@endsection

