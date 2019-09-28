<?php
add_action('enqueue_block_editor_assets', 'block_editor_scripts');
function block_editor_scripts()
{
    wp_enqueue_script(
        // name of script to load backend scripts
        'block_editor_scripts',
        // location of the built block file
        plugins_url('block.build.js', __FILE__),
        // dependencies
        array('wp-blocks', 'wp-i18n', 'wp-editor', 'wp-components'),
        ''
    );

    wp_enqueue_style(
        // name of script to  add backend styles
        'block_editor_styles',
        // url for editor styles
        plugins_url('editor.css', __FILE__),
        array(),
        ''
    );
}

//- ADD BLOCK ASSETS FOR FRONTEND
add_action('enqueue_block_assets', 'block_frontend_styles');

function block_frontend_styles()
{
    wp_enqueue_style(
        // name of script invoked to load frontend files
        'block_frontend_styles',
        // location of frontend styles css
        plugins_url('style.css', __FILE__),
        array(),
        ''
    );
}
