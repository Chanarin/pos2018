<td>

@if($entry->{$column['name']} != '' or $entry->{$column['name']} != null)
        <i class="fa {{ $entry->{$column['name']} }}"></i>
    @endif

</td>