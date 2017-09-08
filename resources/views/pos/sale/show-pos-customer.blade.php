@if(count($rows)>0)
    @foreach($rows as $row)
        <tr data-id="{{$row->id}}" data-name="{{$row->name}}">
            <td><strong>{{$row->name}}</strong></td>
            <td>{{$row->phone}}</td>
        </tr>
    @endforeach
@endif