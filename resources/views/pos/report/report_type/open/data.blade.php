@if(count($rows) > 0)
    <table class="table table-hover" border="1" style="border-color: #CCCCCC">

        <tr style="background-color: #7B7777; color: white;border-color: #CCCCCC">
            <th>{{_t('No')}}</th>
            <th>{{_t('Open Number')}}</th>
            <th>{{_t('Date')}}</th>
            <th>{{_t('Description')}}</th>
            <th>{{_t('Total Qty')}}</th>
            <th>{{_t('Total Cost')}}</th>
        </tr>
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
            <tr style="@if($loop->index % 2 > 0) background-color: #f1f1f1; @endif">
                <td>{{ (($rows->currentPage()-1)*$rows->perPage())+$count++ }}</td>
                <td>{{$row->open_number }}</td>
                <td>{{\Carbon\Carbon::parse($row->_date_)->format('d/m/Y') }}</td>
                <td>{{$row->description}}</td>

                <td>{{number_format($total_qty)}} @if($total_qty > 1) {{_t('Units')}}  @else {{_t('Unit')}} @endif</td>
                <td>$ {{number_format($total_cost,2)}}</td>
            </tr>
        @endforeach
        <tr style="background-color: #428BCA; color: white;">
            <th style="text-align: right;">[{{_t('Total')}}]</th>
            <th></th>
            <th></th>
            <th></th>
            <th style="padding-left: 15px;">{{$total_all_qty}} @if($total_all_qty > 1) {{_t('Units')}}  @else {{_t('Unit')}} @endif </th>
            <th style="padding-left: 15px;">$ {{number_format($total_all_cost,2)}}</th>
        </tr>


    </table>

  <div align="center" class="my-paginate">
      {!! $rows->links() !!}
  </div>
@else

@endif