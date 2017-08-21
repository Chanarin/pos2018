<td>
    @if (!isset($column['link']) or $column['link'] != False)
        <a href="{{ asset($entry->{$column['name']}) }}" target="_blank">
            @endif
            <img src="{{ ($entry->{$column['name']} == '' || $entry->{$column['name']} == null)?asset('No_Image_Available.jpg'): url('img/cache/small/'.\App\Helpers\Glb::get_basename($entry->{$column['name']})) }}"
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
</td>