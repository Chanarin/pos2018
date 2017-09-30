@if(count($rows)>0)
<table class="table table-hover" border="1">
    <tr style="background-color: #7B7777; color: white;">


        <th>No</th>
        <th>Code</th>
        <th>Name</th>
        <th>Begin</th>
        <th>Total In</th>
        <th>Total Out</th>
        <th>Balance</th>
    </tr>
    @php
        $count = 1;
        $total_begin = 0;
        $total_in = 0;
        $total_out = 0;
        $total_balance = 0;
    @endphp
   @foreach( $rows as $row)
        @php
            $total_begin+= ($stocks[$row->id]['begin']);
            $total_in+= ($stocks[$row->id]['in']);
            $total_out+= ($stocks[$row->id]['out']);
            $total_balance+= ($stocks[$row->id]['begin'] + $stocks[$row->id]['in'] - $stocks[$row->id]['out']);
        @endphp
    <tr style="@if($loop->index % 2 > 0) background-color: #f1f1f1; @endif">
        <td>{{ (($rows->currentPage()-1)*$rows->perPage())+$count++ }}</td>
        <td>{{$row->item_code}}</td>
        <td>{{$row->title}}</td>
        <td>{{$stocks[$row->id]['begin']}}</td>
        <td>{{$stocks[$row->id]['in']}}</td>
        <td>{{$stocks[$row->id]['out']}}</td>
        <td>{{$stocks[$row->id]['begin'] + $stocks[$row->id]['in'] - $stocks[$row->id]['out']}}</td>
    </tr>
    @endforeach
    <tr style="background-color: #428BCA; color: white;">
        <th>[No]</th>
        <th>[Code]</th>
        <th>[Name]</th>
        <th>{{$total_begin}}</th>
        <th>{{$total_in}}</th>
        <th>{{$total_out}}</th>
        <th>{{$total_balance}}</th>
    </tr>
</table>
<div align="center" class="my-paginate">
    {!! $rows->links() !!}
</div>
@else
@endif