

@if(count($rows)>0)
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
    <thead>

    <tr>
        <th class="text-center">{{_t('No')}}</th>
        <th class="text-center">{{_t('Invoice Number')}}</th>
        <th style="text-align: center !important;">{{_t('Customer')}}</th>
        <th style="text-align: center !important;">{{_t('Deposit')}}</th>
        <th style="text-align: center !important;">{{_t('Complete Price')}}</th>
        <th style="text-align: center !important;">{{_t('Subtotal')}}</th>
        <th style="text-align: center !important;">{{_t('Discount')}}</th>
        <th style="text-align: center !important;">{{_t('Total Payable')}}</th>

    </tr>
    </thead>
    <tbody>
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
            <td>{{$row->customer->name}}</td>
            <td>$ {{number_format($row->deposit ,2)}}</td>
            <td>$ {{number_format($row->complete_price ,2)}}</td>
            <td>$ {{number_format($row->total_amt ,2)}}</td>
            <td>$ {{number_format($row->total_discount ,2)}}</td>
            <td>$ {{number_format($row->total_payable ,2)}}</td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
        <tr style="height: 30px;">
            <td colspan="3" style="text-align: right;">{{_t('Total')}}:</td>
            <td style="padding-left: 15px;">$ {{number_format($total_deposit,2)}} </td>
            <td style="padding-left: 15px;">$ {{number_format($complete_price,2)}} </td>
            <td style="padding-left: 15px;">$ {{number_format($total_amount,2)}} </td>
            <td style="padding-left: 15px;">$ {{number_format($total_discount,2)}} </td>
            <td style="padding-left: 15px;">$ {{number_format($total_payable,2)}} </td>
        </tr>
        <tr style="text-align: right;" >
            <td class="my-paginate">
                {!! $rows->links() !!}
            </td>
        </tr>
    </tfoot>


@endif




