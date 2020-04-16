@can('edit', app($dataType->model_name))
    @if(isset($dataType->order_column) && isset($dataType->order_display_column))
        <a href="{{ route('voyager.'.$dataType->slug.'.order') }}" class="btn btn-primary btn-add-new">
            <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
        </a>
    @endif
@endcan
