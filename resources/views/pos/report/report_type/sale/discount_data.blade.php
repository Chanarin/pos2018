@if(count($rows) > 0)
    <table class="table table-hover" border="1" style="border-color: #CCCCCC">
        <tr style="background-color: #7B7777; color: white;border-color: #CCCCCC">

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
            <tr style="@if($loop->index % 2 > 0) background-color: #f1f1f1; @endif">
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
        <tr style="background-color: #428BCA; color: white;">
            <th style="text-align: right;">[{{_t('Total')}}]</th>
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
    </table>

    <div align="center" class="my-paginate" >
        {!! $rows->links() !!}
    </div>
@else

@endif