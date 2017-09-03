@foreach($items as $item)
    @php
        $img = json_decode($item->image);
    @endphp
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 top-item-style add-order-item" data-id="{{$item->id}}">
        <div class="padding-around pos-item"
        data-id  = "{{$item->id}}"
        data-item_code  = "{{$item->item_code  }}"
        data-title  = "{{$item->title  }}"
        data-unit  = "{{$item->unit  }}"
        data-price  = "{{$item->price  }}"
             @if(count($img)>0)
                data-image  = "{{url('img/cache/original/'.\App\Helpers\Glb::get_basename($img[0]))}}"
             @else
             data-image = ""

             @endif
        >

            @if(count($img)>0)
                <img alt="{{$item->title}}" src="{{url('img/cache/original/'.\App\Helpers\Glb::get_basename($img[0]))}}" class=" open-button img-padding" width="120" height="120">
            @endif
            <div class="name-style  open-button" >{{$item->title}}</div>
            <div class="id-style  open-button"><b><span>$</span> {{$item->price}}</b></div>
            <div class="id-style  open-button"><b><span>ID:</span> {{$item->item_code}}</b></div>
        </div>
    </div>
@endforeach
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 my-paginate" align="center">
    {!! $items->links() !!}
</div>