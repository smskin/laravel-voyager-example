<script>
    $(document).ready(function () {
        $('.dd').nestable({
            maxDepth: 1
        });

        /**
         * Reorder items
         */
        $('.dd').on('change', function (e) {
            $.post('{{ route('voyager.'.$dataType->slug.'.order') }}', {
                order: JSON.stringify($('.dd').nestable('serialize')),
                _token: '{{ csrf_token() }}'
            }, function (data) {
                toastr.success("{{ __('voyager::bread.updated_order') }}");
            });
        });
    });
</script>
