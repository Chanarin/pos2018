
<style>
    th, td {
        border: 1px solid rgba(188, 188, 188, 0.96);
        padding: 5px;
    }
</style>
<div style="margin-bottom: 10px;">
    <img src="{{asset('/pos/img/logo.jpg')}}" height="60" style="margin-bottom: 20px; margin-top: 20px;">
    <h3 align="center" style="margin-top: -50px;">{{_t('PROFIT REPORT')}}</h3>
    @if($report_option == 'between')

        <h4 align="center" style=" margin-top: 0px; ">{{_t('Form Date')}}
            <b>{{\Carbon\Carbon::parse($from_date)->format('d/m/Y') }}</b> {{_t('To Date')}}
            <b> {{\Carbon\Carbon::parse($to_date)->format('d/m/Y') }}</b></h4>
    @else
        <h4 align="center" style=" margin-top: 0px; ">{{_t('Date')}} <b>{{\Carbon\Carbon::parse($to_date)->format('d/m/Y') }}</b>
        </h4>
    @endif
    <h5 style="margin-top: -30px; padding-left: 15px;">{{_t('Tel')}} : 012 669 175 /012 864 213</h5>
    <h5 style="margin-top: -5px; padding-left: 37px;"> : 016 669 175 /010 864 213 /010 979 960</h5>
</div>
@if(count($rows) > 0)
    <table class="" style="width: 100%">

        <thead>
        <tr style="background: #CCCCCC; height: 30px;">
            <th class="text-center">{{_t('No')}}</th>
            <th class="text-center">{{_t('Invoice Number')}}</th>
            <th class="text-center">{{_t('Date')}}</th>
            <th style="text-align: center !important;">{{_t('Customer')}}</th>
            <th style="text-align: center !important;">{{_t('Total Cost')}}</th>
            <th style="text-align: center !important;">{{_t('Total Price')}}</th>
            <th style="text-align: center !important;">{{_t('Total Discount')}}</th>
            <th style="text-align: center !important;">{{_t('Total Payable')}}</th>
            <th style="text-align: center !important;">{{_t('Profit')}}</th>
        </tr>
        </thead>
        <tbody>
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

            <tr style="height: 30px ;   @if($loop->index % 2 > 0) background-color: #f1f1f1; @endif">
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
        </tbody>
        <tfoot>
        <tr style="background-color: #428BCA;color:white;border-color: #357EBD;">
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

        </tfoot>
    </table>
    <div align="center" class="my-paginate" >
        {!! $rows->links() !!}
    </div>
@else
    <h2 align="center">{{_t('Not Record Found')}}</h2>

@endif





