<li>
    <a href="{{ $selected_value['link'] }}">{{ $selected_value['text'] }}</a>
    @if (count($selected_value['children']) > 0)
        <ul>
            @foreach($selected_value['children'] as $selected_value)
                @include('vendor.voyager.formfields.partials.relationship.has_many.read.recursive_list', $selected_value)
            @endforeach
        </ul>
    @endif
</li>
