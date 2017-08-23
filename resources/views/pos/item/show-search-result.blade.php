<table class="table table-hover">
    <thead>
    <tr>
        <th></th>
        <th>Category</th>
        <th>Code</th>
        <th>Title</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>

    @if(isset($rows))
        @if(count($rows) > 0)
            @foreach($rows as $row)
                @php
                 $imgx = json_decode($row->image);

                $img = isset($imgx[0])?$imgx[0]:null;
                @endphp
                <tr>
                    <td>
                       <input data-id="{{$row->id}}" value="{{$row->id}}" type="checkbox" class="ch-select-item" id="ch-select-item-{{ $row->id }}">
                    </td>
                    <td><label for="ch-select-item-{{ $row->id }}">{{ isset($row->category->title)?$row->category->title:'' }}</label></td>
                    <td><label for="ch-select-item-{{ $row->id }}">{{ $row->item_code }}</label></td>
                    <td><label for="ch-select-item-{{ $row->id }}">{{ $row->title }}</label></td>
                   <td> @if($img != null) <img src="{{url('/img/cache/small/'. \App\Helpers\Glb::get_basename($img))}}" height="50"> @endif </td>
                </tr>
            @endforeach
        @endif
    @endif

    </tbody>

</table>
@if(isset($rows))
<div class="box-footer clearfix my-pagination">
    {!! $rows->links('vendor.pagination.default2') !!}
</div>
@endif