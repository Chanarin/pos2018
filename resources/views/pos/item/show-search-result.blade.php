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
                        <button data-id="{{$row->id}}" class="btn btn-sm btn-info modal-add-item-main" type="button"><span class="sr-only">add</span><i class="fa fa-plus" role="presentation" aria-hidden="true"></i></button>
                    </td>
                    <td>{{ isset($row->category->title)?$row->category->title:'' }}</td>
                    <td>{{ $row->item_code }}</td>
                    <td>{{ $row->title }}</td>
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