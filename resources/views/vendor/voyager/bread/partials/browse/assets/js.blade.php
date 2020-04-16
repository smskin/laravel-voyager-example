<!-- DataTables -->
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
    <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
@endif
<script>
    $(document).ready(function () {
            @if (!$dataType->server_side)
        var table = $('#dataTable').DataTable({!! json_encode(
                    array_merge([
                        "order" => $orderColumn,
                        "language" => __('voyager::datatable'),
                        "columnDefs" => [['targets' => -1, 'searchable' =>  false, 'orderable' => false]],
                    ],
                    config('voyager.dashboard.data_tables', []))
                , true) !!});
        @else
        $('#search-input select').select2({
            minimumResultsForSearch: Infinity
        });
        @endif

        @if ($isModelTranslatable)
        $('.side-body').multilingual();
        //Reinitialise the multilingual features when they change tab
        $('#dataTable').on('draw.dt', function(){
            $('.side-body').data('multilingual').init();
        })
        @endif
        $('.select_all').on('click', function(e) {
            $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
        });
    });


    var deleteFormAction;
    $('td').on('click', '.delete', function (e) {
        $('#delete_form')[0].action = '{{ route('voyager.'.$dataType->slug.'.destroy', '__id') }}'.replace('__id', $(this).data('id'));
        $('#delete_modal').modal('show');
    });

    @if($usesSoftDeletes)
    @php
        $params = [
            's' => $search->value,
            'filter' => $search->filter,
            'key' => $search->key,
            'order_by' => $orderBy,
            'sort_order' => $sortOrder,
        ];
    @endphp
    $(function() {
        $('#show_soft_deletes').change(function() {
            if ($(this).prop('checked')) {
                $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 1]), true)) }}"></a>');
            }else{
                $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 0]), true)) }}"></a>');
            }

            $('#redir')[0].click();
        })
    })
    @endif
    $('input[name="row_id"]').on('change', function () {
        var ids = [];
        $('input[name="row_id"]').each(function() {
            if ($(this).is(':checked')) {
                ids.push($(this).val());
            }
        });
        $('.selected_ids').val(ids);
    });
</script>
