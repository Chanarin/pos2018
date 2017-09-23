
<style>
    .timeline > li > .timeline-item {
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        border-radius: 3px;
        margin-top: 0;
        background: #fff;
        /* color: #444; */
        margin-left: 60px;
        margin-right: 15px;
        padding: 0;
        position: relative;
        height: auto;
        overflow: hidden;
        padding-bottom: 30px !important;
    }
     table{
         border-collapse: collapse;
     }
    .border th, .border td {
        border: 1px solid rgba(188, 188, 188, 0.96);
        padding: 5px;
    }
</style>
@extends('vendor.backpack.base.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="time-label">
                      <span class="bg-red">
                      <td  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">{{_t('Customer Information')}}</td>
                      </span>
                    </li>
                    <li>
                        <i class="fa fa-calendar bg-yellow"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i></span>

                            <h3 class="timeline-header"><a href="#"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">{{_t('Customer Record')}}</a></h3>

                            <div class="timeline-body">
                                <div class="col-md-3">
                                    {{--<img src="http://placehold.it/150x100" alt="..." class="margin">--}}
                                    {{--  <a href=""
                                         class="zoom"><i class="fa fa-search"></i></a>--}}
                                    @if($row->image != null)

                                        <img src="{{ url('img/cache/img150x100/'.\App\Helpers\Glb::get_basename($row->image)) }}">
                                    @else
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    @endif
                                </div>
                                <div class="col-md-9">
                                    <table width="100%">
                                        <tr>
                                            <td>{{_t('Name')}}: </td>
                                            <td>{{$row->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{_t('Gender')}}: </td>
                                            <td>{{$row->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{_t('Phone')}}: </td>
                                            <td>{{$row->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{_t('Description')}}: </td>
                                            <td>{{$row->description}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{_t('Member Date')}}: </td>
                                            <td>{{\Carbon\Carbon::parse($row->created_at)->format('d/M/Y') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </li>

                    @if(count($row_invoice)> 0)
                        <li class="time-label">
                          <span class="bg-green"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">
                           {{_t('Invoice history')}}
                          </span>
                        </li>
                        <li>
                            <i class="fa fa-camera bg-purple"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i></span>
                                <h3 class="timeline-header"><a href="#"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">{{_t('Customer Invoice Record')}}</a></h3>
                                <div class="timeline-body">
                                    @foreach($row_invoice as $invoice)
                                        <table style="width: 100%">
                                            <tr style="">
                                                <td colspan="7">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="33%" valign="top">
                                                                {{_t('Invoice No')}}: {{$invoice->invoice_number}}<br>
                                                                {{_t('Note')}}: {{$invoice->payment_note}}
                                                            </td>
                                                            <td width="34%" valign="top">
                                                                {{_t('Exchange Rate')}}: {{$invoice->exchange_rate}} ៛<br>
                                                            </td>
                                                            <td width="33%" valign="top">
                                                                {{_t('Invoice Due')}}: {{\Carbon\Carbon::parse($invoice->_date_)->format('d/m/Y') }}<br>
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
                                            <table width="100%">
                                                <thead class="border" style="background: #CCCCCC">
                                                <tr>
                                                    <th class="text-center">{{_t('No')}}</th>
                                                    <th class="text-center">{{_t('Code')}}</th>
                                                    <th class="text-center">{{_t('Name')}}</th>
                                                    <th class="text-center">{{_t('Unit')}}</th>
                                                    <th class="text-center">{{_t('Qty')}}</th>
                                                    <th class="text-center">{{_t('Cost')}}</th>
                                                    <th class="text-center">{{_t('Total')}}</th>

                                                </tr>
                                                </thead>
                                                <tbody class="border">
                                                    @php
                                                        $rowds = \App\Models\InvoiceDetail::where('ref_id',$invoice->id)
                                                             ->get();
                                                    @endphp
                                                    @foreach($rowds as $rd)
                                                        @php
                                                            $rds = \App\Models\ItemDetail::where('ref_id',$rd->item_id)->get();
                                                            $oe = $loop->index;
                                                        @endphp
                                                           <tr class="item" style="height: 30px;  @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif">
                                                               <td class="text-left">{{$loop->index+1}}</td>
                                                               <td class="text-left">{{$rd->item_code}}</td>
                                                               <td class="text-left">{{$rd->title}}</td>
                                                               <td class="text-left">{{$rd->unit}}</td>
                                                               <td class="text-right">{{$rd->qty}}</td>
                                                               <td class="text-right">$ {{number_format($rd->price,2)}}</td>
                                                               <td class="text-right">$ {{number_format($rd->price*$rd->qty,2)}}</td>
                                                            </tr>
                                                        @if(count($rds)>0)
                                                            @foreach($rds as $r)
                                                                @php
                                                                    $unit = \App\Models\Unit::where('id',$r->unit)->first();
                                                                @endphp
                                                             <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif">
                                                                 <td class="text-left"></td>
                                                                 <td class="text-left">{{$r->item_code}}</td>
                                                                 <td class="text-left">{{$r->title}}</td>
                                                                 <td class="text-left">{{$r->unit}} {{isset($unit->name)?$unit->name:''}}</td>
                                                                 <td class="text-right">{{$r->qty}}</td>
                                                                 <td class="text-right">$ {{number_format($r->price,2)}}</td>
                                                                 <td class="text-right">$ {{number_format($r->price*$r->qty,2)}}</td>
                                                             </tr>
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                                <tr>
                                                    <td colspan="4"></td>
                                                    <td style="text-align:right;">{{_t('Total')}}</td>
                                                    <td style="text-align:right;">$ {{number_format($invoice->total_amt,2)}}</td>
                                                    <td style="text-align:right;">{{number_format(($invoice->total_amt)*$invoice->exchange_rate,2)}} ៛</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                    <td style="text-align:right;">{{_t('Total Discount')}}</td>
                                                    <td style="text-align:right;">$ {{number_format($invoice->total_discount,2)}}</td>
                                                    <td style="text-align:right;">{{number_format(($invoice->total_discount)*$invoice->exchange_rate,2)}} ៛</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                    <td style="text-align:right;">{{_t('Grand Total')}}</td>
                                                    <td style="text-align:right;">$ {{number_format($invoice->total_payable,2)}}</td>
                                                    <td style="text-align:right;">{{number_format(($invoice->total_payable)*$invoice->exchange_rate,2)}} ៛</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                    <td style="text-align:right;">{{_t('Total Paid')}}</td>
                                                    <td style="text-align:right;">$ {{number_format($invoice->paid+($invoice->paid_kh/$invoice->exchange_rate),2)}}</td>
                                                    <td style="text-align:right;">{{number_format(($invoice->paid+($invoice->paid_kh/$invoice->exchange_rate))*$invoice->exchange_rate,2)}} ​​៛</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                    <td style="text-align:right;">{{_t('Remaining')}}</td>
                                                    <td style="text-align:right;">$ {{number_format(($invoice->paid+($invoice->paid_kh/$invoice->exchange_rate))-$invoice->total_payable,2)}}</td>
                                                    <td style="text-align:right;">{{number_format((($invoice->paid+($invoice->paid_kh/$invoice->exchange_rate))-$invoice->total_payable)*$invoice->exchange_rate,2)}}​ ៛</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="7">
                                                        <br>
                                                        <hr>
                                                        <br>
                                                    </td>
                                                </tr>
                                            </table>
                                    </table>
                                    @endforeach


                                </div>
                            </div>
                        </li>
                    @else
                    @endif

                    @if(count($row_production) > 0)
                    {{---------------------------}}
                    <li class="time-label">
                      <span class="bg-green"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">
                        {{_t('Production History')}}
                      </span>
                    </li>
                    <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i></span>

                            <h3 class="timeline-header"><a href="#"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">{{_t('Customer Production Record')}}</a></h3>

                            <div class="timeline-body">
                                @foreach($row_production as $production)
                                    <table style="width: 100%">
                                        <tr style="">
                                            <td colspan="7">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="33%" valign="top">
                                                            {{_t('Production Number')}}: {{$production->production_number}}<br>
                                                        </td>
                                                        <td width="33%" valign="top">
                                                            {{_t('Production Due')}}: {{\Carbon\Carbon::parse($production->_date_)->format('d/m/Y') }}<br>
                                                        </td>
                                                        <td width="34%" valign="top">
                                                            {{_t('Note')}}: {{$production->description}}<br>
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
                                        <table width="100%">
                                            <thead class="border" style="background: #CCCCCC">
                                            <tr>
                                                <th class="text-center">{{_t('No')}}</th>
                                                <th class="text-center">{{_t('Code')}}</th>
                                                <th class="text-center">{{_t('Name')}}</th>
                                                <th class="text-center">{{_t('Unit')}}</th>
                                                <th class="text-center">{{_t('Qty')}}</th>
                                                <th class="text-center">{{_t('Cost')}}</th>
                                                <th class="text-center">{{_t('Total')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody class="border">
                                            @php
                                                $rowss = \App\Models\ProductionDetail::where('ref_id',$production->id)->get();
                                            @endphp
                                            @foreach($rowss as $rd)
                                                @php
                                                    $oe = $loop->index;
                                                @endphp
                                                <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                                                    <td class="text-left">{{$loop->index+1}}</td>
                                                    <td class="text-left">{{$rd->item_code}}</td>
                                                    <td class="text-left">{{$rd->title}}</td>
                                                    <td class="text-left">{{$rd->unit}}</td>
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
                                                                <td class="text-left">{{$r->unit}} {{isset($unit->name)?$unit->name:''}}</td>
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
                                    </table>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    @else
                    @endif

                    @if(count($row_purchase) > 0)
                    {{---------------------------}}
                    <li class="time-label">
                      <span class="bg-green"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">
                        {{_t('Purchase History')}}
                      </span>
                    </li>
                    <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i></span>

                            <h3 class="timeline-header"><a href="#"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">{{_t('Customer Purchase Record')}}</a></h3>

                            <div class="timeline-body">
                                @foreach($row_purchase as $purchase)
                                <table style="width: 100%">
                                    <tr style="">
                                        <td colspan="6">
                                            <table width="100%">
                                                <tr>
                                                    <td width="33%" valign="top">
                                                        {{_t('Purchase Number')}}: {{$purchase->purchase_number}}<br>
                                                    </td>
                                                    <td width="34%" valign="top">
                                                        {{_t('Purchase Due')}}: {{\Carbon\Carbon::parse($purchase->_date_)->format('d/m/Y') }}<br>
                                                    </td>
                                                    <td width="33%" valign="top">
                                                        {{_t('Note')}}: {{$purchase->description}}<br>
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
                                    <table width="100%">
                                        <thead class="border" style="background: #CCCCCC">
                                        <tr>
                                            <th class="text-center">{{_t('No')}}</th>
                                            <th class="text-center">{{_t('Code')}}</th>
                                            <th class="text-center">{{_t('Name')}}</th>
                                            <th class="text-center">{{_t('Unit')}}</th>
                                            <th class="text-center">{{_t('Qty')}}</th>
                                            <th class="text-center">{{_t('Cost')}}</th>
                                            <th class="text-center">{{_t('Total')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody class="border">
                                        @php
                                            $rowss = \App\Models\PurchaseDetail::where('ref_id',$purchase->id)->get();
                                        @endphp
                                        @foreach($rowss as $rd)
                                            @php
                                                $oe = $loop->index;
                                            @endphp
                                            <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                                                <td class="text-left">{{$loop->index+1}}</td>
                                                <td class="text-left">{{$rd->item_code}}</td>
                                                <td class="text-left">{{$rd->title}}</td>
                                                <td class="text-left">{{$rd->unit}}</td>
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
                                                        <td class="text-left">{{$r->unit}} {{isset($unit->name)?$unit->name:''}}</td>
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

                                </table>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    @else
                    @endif
                </ul>
            </div>
        </div>
    </section>
@endsection