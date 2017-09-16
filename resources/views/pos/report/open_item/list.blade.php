<style>
    .border th, .border td {
        border: 1px solid rgba(188, 188, 188, 0.96);
        padding: 5px;
    }
</style>
<div style="margin-bottom: 10px;">
    <img src="{{asset('/pos/img/logo.jpg')}}" height="60" style="margin-bottom: 20px; margin-top: 20px;">
    <h3 align="center" style="margin-top: -50px;">OPEN LIST REPORT</h3>
        @if($report_option == 'between')

            <h4 align="center" style=" margin-top: 0px; ">Form Date
                <b>{{\Carbon\Carbon::parse($from_date)->format('d/m/Y') }}</b> To Date
                <b> {{\Carbon\Carbon::parse($to_date)->format('d/m/Y') }}</b></h4>
        @else
            <h4 align="center" style=" margin-top: 0px; ">Date <b>{{\Carbon\Carbon::parse($to_date)->format('d/m/Y') }}</b>
            </h4>
        @endif
    {{--<h4 align="center" style=" margin-top: 0; ">Date {{Carbon\Carbon::now()->format('d/m/Y') }}</h4>--}}
    <h5 style="margin-top: -30px; padding-left: 15px;">Tel : 012 669 175 /012 864 213</h5>
    <h5 style="margin-top: -5px; padding-left: 37px;"> : 016 669 175 /010 864 213 /010 979 960</h5>
</div>
@if(count($rows) > 0)
    <table class="" style="width: 100%">

        <thead class="border">
        <tr style="background: #CCCCCC; height: 30px;">
            <th class="text-center">No</th>
            <th class="text-center">Open Number</th>
            <th class="text-center">Date</th>
            <th style="text-align: center !important;">Description</th>
            <th style="text-align: center !important;">Total Qty</th>
            <th style="text-align: center !important;">Total Cost</th>

        </tr>
        </thead>

        <tbody class="border">
        @php
            $count = 1;
            $total_all_qty = 0;
            $total_all_cost = 0;
        @endphp

        @foreach($rows as $row)
            @php
                $total_qty = 0;
                $total_cost = 0;
               $open_details = \App\Models\OpenItemDetail::where('ref_id','=',$row->id)->get();
            @endphp
                @foreach($open_details as $open_detail)
                    @php
                        $total_qty+= ($open_detail->qty);
                        $total_cost+= ($open_detail->cost);

                        $total_all_qty+= ($open_detail->qty);
                        $total_all_cost+= ($open_detail->cost);
                    @endphp
                @endforeach
                <tr style="height: 30px ;   @if($loop->index % 2 > 0) background-color: #f1f1f1; @endif">
                    <td class="text-left">{{ (($rows->currentPage()-1)*$rows->perPage())+$count++ }}</td>
                    <td>{{$row->open_number }}</td>
                    <td>{{\Carbon\Carbon::parse($row->_date_)->format('d/m/Y') }}</td>
                    <td>{{$row->description}}</td>

                    <td>{{number_format($total_qty)}} @if($total_qty > 1) Units  @else Unit @endif</td>
                    <td>$ {{number_format($total_cost,2)}}</td>
                </tr>
        @endforeach
        </tbody>

        <tfoot>
        <tr style="height: 30px;">
            <td colspan="4" style="text-align: right;">Total:</td>
            <td style="padding-left: 15px;">{{$total_all_qty}} @if($total_all_qty > 1) Units  @else Unit @endif </td>
            <td style="padding-left: 15px;">$ {{number_format($total_all_cost,2)}} </td>
        </tr>
        <tr>
            <td colspan="8">
                <table width="100%" style="margin-top: 30px;">
                    <tr>

                        <td width="33%" style="text-align: center">
                            Checked By: <br><br><br>
                            Name: .................................<br><br>
                            Date: _____/_____/_____
                        </td>
                        <td width="33%" style="text-align: center"></td>
                        <td width="33%" style="text-align: center">
                            Reported By <br><br><br>
                            Name: .................................<br><br>
                            Date: _____/_____/_____
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        </tfoot>
    </table>
    <div align="center" class="my-paginate" >
        {!! $rows->links() !!}
    </div>
@else
    <h2 align="center">Not Record Found</h2>

@endif


