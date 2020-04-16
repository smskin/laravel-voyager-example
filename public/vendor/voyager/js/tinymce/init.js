

function tinymce_init_callback(editor)
{

}

function tinymce_setup_callback(editor)
{
    editor.settings.external_plugins = {
        media: '/vendor/voyager/js/tinymce/plugins/media/plugin.min.js'
    };
    editor.settings.plugins = editor.settings.plugins += ' ' + [
        'media'
    ].join(' ');
    editor.settings.toolbar = editor.settings.toolbar += ' ' + [
        'media'
    ].join(' ');
}


// docs: vendor/tcg/voyager/docs/bread/formfields/tinymce.md
