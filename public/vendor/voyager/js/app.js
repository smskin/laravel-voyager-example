$(document).ready(function () {
    $('select.select2-ajax-custom').each(function() {
        var $form = $(this).parents('form').first();

        var dependFields = $(this).data('depend-on-fields');
        if (dependFields === undefined){
            dependFields = [];
        }

        var $selector = $(this);
        $selector.select2({
            width: '100%',
            ajax: {
                url: $selector.data('get-items-route'),
                data: function (params) {
                    var query = {
                        search: params.term,
                        type: $selector.data('get-items-field'),
                        method: $selector.data('method'),
                        id: $selector.data('id'),
                        page: params.page || 1
                    };

                    $.each(dependFields, function(index, object){
                        query['depends_on_fields[' + index + '][field]'] = object.field;
                        query['depends_on_fields[' + index + '][operator]'] = object.operator;
                        query['depends_on_fields[' + index + '][value]'] = $form.find('[name="' + object.field + '"]').first().val();
                    });

                    return query;
                }
            }
        });

        $.each(dependFields, function(index, object){
            var $field = $form.find('[name="' + object.field + '"]');
            $field.on('change',function(){
                $selector.val('null').trigger('change');
            });
        });

        $(this).on('select2:select',function(e){
            var data = e.params.data;
            if (data.id == '') {
                // "None" was selected. Clear all selected options
                $(this).val([]).trigger('change');
            } else {
                $(e.currentTarget).find("option[value='" + data.id + "']").attr('selected','selected');
            }
        });

        $(this).on('select2:unselect',function(e){
            var data = e.params.data;
            $(e.currentTarget).find("option[value='" + data.id + "']").attr('selected',false);
        });
    });
});
