<?php

function toggle_script_method() {
    wp_register_script('toggle_script',
        get_stylesheet_directory_uri() . '/js/toggle.js',
        array('jquery'),
        '1.0' );
    wp_enqueue_script('toggle_script');
}
add_action('wp_enqueue_scripts', 'toggle_script_method');

?>
