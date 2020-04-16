@foreach($actions as $action)
    @if (method_exists($action, 'massAction'))
        @include('voyager::bread.partials.actions', ['action' => $action, 'data' => null])
    @endif
@endforeach
