@if(count($rows)>0)
    @foreach($rows as $row)
        <tr data-id="{{$row->id}}"
            data-item_code="{{$row->item_code}}"
            data-title="{{$row->title}}"
            data-unit="{{$row->unit}}"
            data-price="{{$row->price}}"
        >
            <td><strong>{{$row->item_code}}</strong></td>
            <td>{{$row->title}}</td>
            <td>{{$row->unit}}</td>
            <td>{{$row->price}}</td>
        </tr>
    @endforeach
@endif