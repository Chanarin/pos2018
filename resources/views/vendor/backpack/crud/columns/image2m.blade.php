@php
$f = json_decode($entry->{$column['name']},true);
@endphp
<td>
    @if(count($f)>0)
        @foreach($f as $fv)
            @if (!isset($column['link']) or $column['link'] != False)
                <a href="{{ asset($fv) }}" target="_blank">
                    @endif
                    <img border="1" src="{{ ($fv == '' || $fv == null)?asset('No_Image_Available.jpg'): url('img/cache/small/'.\App\Helpers\Glb::get_basename($fv)) }}"
                    @if (isset($column['attributes']))
                        @foreach ($column['attributes'] as $attribute => $value)
                            @if (is_string($attribute))
                                {{ $attribute }}="{{ $value }}"
                            @endif
                        @endforeach
                    @else
                        style="height: 48px;"
                    @endif />
                    @if (!isset($column['link']) or $column['link'] != False)
                </a>
            @endif
        @endforeach
    @endif


</td>